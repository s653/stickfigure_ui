<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'profile_pic' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:1024'],
            'cover_photo' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:1024']
        ];
    }

    public function withValidator($validator)
    {
        abortIfValidationFails($validator);
    }
}
