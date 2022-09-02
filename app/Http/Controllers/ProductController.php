<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
	
	public function edit($id)
	{
		$product = Product::find($id);
		
		return view('sections.dashboard.products-edit', compact('product'));
	}
	
	public function update(Request $request, $id)
	{
//		Todo: Validamos asi ya que validar con el formRequest trae conflictos
		$this->validate($request,
			[
				'title'       => ['required'],
				'description' => ['required'],
			],
			[
				'title.required'       => 'EL titulo es obligatorio',
				'description.required' => 'La descripcion es obligatoria',
			]
		);
		
		$product = Product::find($id);
		
		if ($request->hasFile('image')) {
			$image = new ImageService($request->file('image'), 'src/images/products');
			$image->resizeImage(343, 384);
			$image->saveImage();

//			Todo File es mejor ya que no rompe si no encuentra la imagen
			File::delete(public_path('src/images/products/' . $product->image));
		}
		
		$product->title       = $request->title;
		$product->description = $request->description;
		$product->image       = $image->imageName ?? $product->image;
		
		$product->save();
		
		return to_route('dashboard.index');
	}
	
	public function destroy($id)
	{
		$product = Product::find($id);
		
		File::delete(public_path('src/images/products/' . $product->image));
		
		$product->delete();
		
		return to_route('dashboard.index');
	}
	
}
