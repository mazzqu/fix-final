<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'name' => 'required|string|unique:users,name',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:5'
		];
	}

	public function messages(): array
	{
		return [
			'name.required' => '名前欄が必要です!',
			'name.unique' => 'このユーザーネムすでに取られたので、別のものを使ってください',
			'email.required' => 'Email は入力してください!',
			'email.unique' => 'このメールアドレスすでに取られたので、別のものを使ってください',
			'password.required' => 'Password は必要です!',
			'password.min' => 'Password は5桁以上入力してください!',
		];
	}
}
