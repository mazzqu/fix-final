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
		// Run-> php artisan db:seed
		// This command is useful for completely re-building your database -> php artisan migrate:fresh --seed
		DB::table('users')->insert([
			'name' => 'admin',
			'email' => 'admin@example.com',
			'role' => 'admin',
			'password' => Hash::make("12345")
		]);
	}
}
