<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
			'title' => 'required',
			'content' => 'required',
			'featured_image' => 'mimes:png,jpg,jpeg,webp|max:500',
			'tags' => 'required',
			'active' => 'required',
			'allowed_comment' => 'required',
			'category_id' => 'required|exists:categories,id'
		];
	}

	public function messages(): array
	{
		return    [
			'title.required' => 'タイトルが必要です!',
			'content.required' => '内容が必要です!',
			'featured_image.required' => '画像をアップしてください!',
			'tags.required' => 'タグを使ってください!',
			'allowed_comment.required' => 'この中から一つ選んでください!'
		];
	}
}
