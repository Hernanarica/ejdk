<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
	public function index()
	{
		return view('sections.dashboard.gallery');
	}
	
	public function create()
	{
		return view('sections.dashboard.gallery-create');
	}
	
	public function store(GalleryRequest $request)
	{
		$image = new ImageService($request->file('image'), 'src/images/gallery');
		$image->resizeImage(600, 450);
		$image->saveImage();
		
		Gallery::create([
			'title'       => $request->title,
			'description' => $request->description,
			'image'       => $image->imageName,
		]);
		
		return to_route('dashboard.index');
	}
	
	public function edit($id)
	{
		$gallery = Gallery::find($id);
		
		return view('sections.dashboard.gallery-edit', compact('gallery'));
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
		
		$gallery = Gallery::find($id);
		
		if ($request->hasFile('image')) {
			$image = new ImageService($request->file('image'), 'src/images/gallery');
			$image->resizeImage(600, 450);
			$image->saveImage();

//			Todo File es mejor ya que no rompe si no encuentra la imagen
			File::delete(public_path('src/images/gallery/' . $gallery->image));
		}
		
		$gallery->title       = $request->title;
		$gallery->description = $request->description;
		$gallery->image       = $image->imageName ?? $gallery->image;
		
		$gallery->save();
		
		return to_route('dashboard.index');
	}
	
	public function destroy($id)
	{
		$gallery = Gallery::find($id);
		
		File::delete(public_path('src/images/gallery/' . $gallery->image));
		
		$gallery->delete();
		
		return to_route('dashboard.index');
	}
}
