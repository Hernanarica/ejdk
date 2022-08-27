<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->insert([
			[
				'id'          => 1,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 2,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 3,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 4,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 5,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 6,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 7,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 8,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 9,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
			[
				'id'          => 10,
				'title'       => 'Producto N',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.',
				'image'       => 'https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80',
				'created_at'  => date('Y-m-d H:i:s'),
				'updated_at'  => date('Y-m-d H:i:s'),
			],
		]);
	}
}
