<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
			'user_name' => 'required|string|max:100',
			'user_email' => 'required|email|max:100',
			'content' => 'required|string',
		];
	}

	public function messages(): array
	{
		return [
			'user_name.required' => '名前欄が必要です!',
			'user_email.required' => 'メールアドレスが必要です!',
			'content.required' => 'コメントを書いてください!',
		];
	}
}
