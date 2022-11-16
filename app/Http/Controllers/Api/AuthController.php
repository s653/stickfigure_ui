<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $creds = $request->only(['email', 'password']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Email is not registered'], 401);
        }

        if (!$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
            return response()->json(['message' => 'Verification Email has been sent to you. Verify your email before trying again'], 401);
        }

        if(!auth()->attempt($creds)) {
            return response()->json(['message' => 'Password is incorrect'],401);
        }

        if($request->has('fcm_token')) {
            $this->saveFcmToken();
        }

        $user = auth()->user();
        $token = $user->createToken($this->getDeviceId()  ?: $user->email)->plainTextToken;
        return response()->json(['message' => 'login success', 'data' => new UserResource($user), 'token' => $token ]);
    }

    public function register(RegisterRequest $request)
    {
        $payload = $request->validated();
        $payload['password'] = bcrypt($request->password);

        if($request->hasFile('profile_pic')) {
            $payload['profile_pic'] = $this->uploadFile($request->file('profile_pic'), 'uploads/profiles');
        }

        if($request->hasFile('cover_photo')) {
            $payload['cover_photo'] = $this->uploadFile($request->file('cover_photo'), 'uploads/profiles');
        }

        $user = User::create($payload);

        event(new Registered($user));

        return response()->json(['message' => 'Registered Successfully , Please check your email for verification link'], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        $this->deleteCurrentFcmToken();
        return response()->json(['message' => 'Logged Out Successfully']);
    }

    public function resetPasswordEmail(Request $request)
    {
        $this->validateInput($request, ['email' => 'required|email|exists:users']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_THROTTLED) {
            return response()->json(['message' => 'An email has already been sent recently'], 400);
        } else if ($status === Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Email sent successfully']);
        }

        return response()->json(['message' => 'Ooops Error while sending email '], 400);
    }


    private function saveFcmToken()
    {
        auth()->user()->fcm_tokens()->updateOrCreate(
            ['device_id' => $this->getDeviceId()],
            ['token' => request()->fcm_token]
        );
    }
}
