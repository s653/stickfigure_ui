<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class FcmTokenController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validateInput(request(), ['token' => ['required', 'string', 'min:100', 'max:191']]);

        $token = auth()->user()->fcm_tokens()->updateOrCreate(
            ['device_id' => $this->getDeviceId()],
            ['token' => request()->token]
        );
        return response()->json(['message' => 'FCM Token ' . ($token->wasRecentlyCreated ? 'Added' : 'Updated') . ' Successfully']);
    }
}
