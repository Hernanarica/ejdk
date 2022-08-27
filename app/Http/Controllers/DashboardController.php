<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Testimony;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
	{
		$testimonials = Testimony::all();
		$products     = Product::all();
		$users        = User::all();
		$galleries    = Gallery::all();
		
		return view('sections.dashboard.dashboard', compact('testimonials', 'products', 'users', 'galleries'));
	}
}
