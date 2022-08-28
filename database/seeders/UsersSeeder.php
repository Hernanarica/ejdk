<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			[
				'id'         => 1,
				'email'      => 'herno@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 2,
				'email'      => 'user-2@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 3,
				'email'      => 'user-3@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 4,
				'email'      => 'user-4@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 5,
				'email'      => 'user-5@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 6,
				'email'      => 'user-6@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 7,
				'email'      => 'user-7@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 8,
				'email'      => 'user-8@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 9,
				'email'      => 'user-9@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 10,
				'email'      => 'user-10@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);
	}
}
