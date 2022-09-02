<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ImageService;
use Intervention\Image\Facades\Image;
use Str;

class ProductController extends Controller
{
	public function index()
	{
		return view('sections.products');
	}
	
	public function create()
	{
		return view('sections.dashboard.products-create');
	}
	
	public function store(ProductRequest $request)
	{
		$image = new ImageService($request->file('image'), 'src/images/products');
		$image->resizeImage(343, 384);
		$image->saveImage();
		
		Product::create([
			'title'       => $request->title,
			'description' => $request->description,
			'image'       => $image->imageName,
		]);
		
		return to_route('dashboard.index');
	}
	
}
