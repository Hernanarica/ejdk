<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
