<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('testimonials')->insert([
			[
				'id'          => 1,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 2,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 3,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 4,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 5,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 6,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 7,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 8,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 9,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 10,
				'name'        => 'Chelsea Hagon',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda aut incidunt quidem.',
				'date'        => date('Y-m-d'),
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
		]);
	}
}
