<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function index()
	{
		return view('auth.login');
	}

	public function register(Request $request)
	{
		$request->validate(
			[
				'name' => 'required|string|unique:users,name',
				'email' => 'required|email|unique:users,email',
				'password' => 'required|min:5'
			],
			// Edit these language to english to japanese
			// このものはログインと登録画面のエラーと成功メッセージ等。
			[
				'name.required' => '名前欄を入力してください !',
				'name.unique' => 'このユーザーネムすでに取られたので、別のものを使ってください',
				'email.required' => 'Email は入力してください!',
				'email.unique' => 'このメールアドレスすでに取られたので、別のものを使ってください',
				'password.required' => 'Password は必要です!!',
				'password.min' => 'Password は5桁以上入力してください!!',
			]
		);

		$data = $request->all();

		$data['slug'] = Str::slug($request->name);
		$data['password'] = Hash::make($request->password);

		User::create($data);

		return to_route('login')->with('success', 'Account has created');
	}

	public function login(Request $request)
	{
		$credentials = $request->validate([
			'email' => 'required|email',
			'password' => 'required',
		]);

		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();

			return to_route('dashboard');
		}

		return to_route('login')->with('danger', 'Credential not match in out database!');
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return to_route('home');
	}
}
