<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
			'title' => 'required|unique:posts',
			'content' => 'required',
			'featured_image' => 'required|mimes:png,jpg,jpeg,webp|max:500',
			'tags' => 'required',
			'allowed_comment' => 'required',
			'active' => 'required',
			'category_id' => 'required|exists:categories,id'
		];
	}

	public function messages(): array
	{
		return	[
			'title.required' => 'タイトルが必要です!',
			'content.required' => '記事の内容は必ず書いてください!',
			'featured_image.required' => '画像をアップしてください!',
			'tags.required' => 'タグを使ってください!',
			'allowed_comment.required' => 'この中から一つ選んでください!'
		];
	}
}
