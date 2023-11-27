<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Posts;

class PreviewController extends Controller
{
	public function preview($slug)
	{
		$post = Posts::where('slug', $slug)->firstOrFail();

		if ($post->active == 1) {
			return to_route('artikel.index')->with('warning', 'Previewは不可能になってしまいました!');
		}

		$tags = explode(',', $post->tags);

		return view('blog.preview', compact('post', 'tags'));
	}
}
