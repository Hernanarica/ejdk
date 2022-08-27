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
				'name'       => 'User 1',
				'email'      => 'user-1@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 2,
				'name'       => 'User 2',
				'email'      => 'user-2@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 3,
				'name'       => 'User 3',
				'email'      => 'user-3@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 4,
				'name'       => 'User 4',
				'email'      => 'user-4@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 5,
				'name'       => 'User 5',
				'email'      => 'user-5@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 6,
				'name'       => 'User 6',
				'email'      => 'user-6@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 7,
				'name'       => 'User 7',
				'email'      => 'user-7@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 8,
				'name'       => 'User 8',
				'email'      => 'user-8@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 9,
				'name'       => 'User 9',
				'email'      => 'user-9@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'id'         => 10,
				'name'       => 'User 10',
				'email'      => 'user-10@gmail.com',
				'password'   => Hash::make('asdf'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);
	}
}
