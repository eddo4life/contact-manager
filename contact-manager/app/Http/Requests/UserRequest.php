<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    // Determine if the user is authorized to make this request
    public function authorize()
    {
        return true; 
    }

    // Define the validation rules
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email' . ($this->user ? ',' . $this->user->id : ''), // Unique except for updates
            'password' => 'required|string|min:6',
        ];
    }
}
