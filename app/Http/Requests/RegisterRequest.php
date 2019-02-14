<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
                'email' => 'required|email|',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required|min:8',
                'name' => 'required|min:2',
                'phone' => 'required_without:email|regex:/^[+]{1}[0-9]{1}\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}$/i',
                'is_confirmed' => 'accepted',
        ];
    }
}
