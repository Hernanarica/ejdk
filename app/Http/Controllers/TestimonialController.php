<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
	public function index()
	{
		return view('sections.dashboard.testimonials');
	}
	
	public function create()
	{
		return view('sections.dashboard.testimonials-create');
	}
}
