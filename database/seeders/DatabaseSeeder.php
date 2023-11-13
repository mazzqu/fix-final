<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		DB::table('users')->insert([
			'name' => 'admin',
			'email' => 'admin@google.com',
			'role' => 'admin',
			'password' => Hash::make("12345")
		]);
	}
}