<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
