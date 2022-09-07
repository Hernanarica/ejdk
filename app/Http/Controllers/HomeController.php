<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Testimony;

class HomeController extends Controller
{
	public function index()
	{
		$galleryItems = Gallery::all();
		$testimonials = Testimony::all();
		
		return view('sections.home', compact('galleryItems', 'testimonials'));
	}
}