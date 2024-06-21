<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => '* Bạn chưa nhập email',
            'email.email' => '* Bạn chưa nhập đúng định dạng email. Ví dụ: abc@gmail.com',
            'password.required' => '* Bạn chưa nhập password',
            'password.min' => '* Password không được ngắn hơn 6 ký tự',
        ];
    }
}