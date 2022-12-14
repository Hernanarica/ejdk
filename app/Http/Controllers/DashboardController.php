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
		$testimonials = Testimony::limit(5)->orderByDesc('id')->get();
		$products     = Product::limit(5)->orderByDesc('id')->get();
		$users        = User::limit(5)->orderByDesc('id')->get();
		$galleries    = Gallery::limit(5)->orderByDesc('id')->get();
		
		return view('sections.dashboard.dashboard', compact('testimonials', 'products', 'users', 'galleries'));
	}
	
	public function products()
	{
		$products = Product::orderByDesc('id')->simplePaginate(5);
		
		return view('sections.dashboard.products', compact('products'));
	}
	
	public function galleries()
	{
		$galleries = Gallery::orderByDesc('id')->simplePaginate(5);
		
		return view('sections.dashboard.gallery', compact('galleries'));
	}
	
	public function testimonials()
	{
		$testimonials = Testimony::orderByDesc('id')->simplePaginate(10);
		
		return view('sections.dashboard.testimonials', compact('testimonials'));
	}
	
	public function users()
	{
		$users = User::orderByDesc('id')->simplePaginate(10);
		
		return view('sections.dashboard.users', compact('users'));
	}
}
