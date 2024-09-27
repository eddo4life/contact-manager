<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email' . ($this->user ? ',' . $this->user->id : ''), // For update, ignore the current user's email
            'password' => 'required|string|min:6', 
        ];
    }
}
