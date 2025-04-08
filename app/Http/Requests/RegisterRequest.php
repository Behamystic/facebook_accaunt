<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // max:2048 kilobyte = 2MB
        ];
    }
    
}
