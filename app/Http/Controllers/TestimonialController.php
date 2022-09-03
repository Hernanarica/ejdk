<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Gallery;
use App\Models\Testimony;

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
	
	public function store(TestimonialRequest $request)
	{
		$request->merge(['date' => date('Y-m-d')]);
		
		Testimony::create($request->all());
		
		return to_route('dashboard.index');
	}
	
	public function edit($id)
	{
		$testimony = Testimony::find($id);
		return view('sections.dashboard.testimonials-edit', compact('testimony'));
	}
	
	public function update(TestimonialRequest $request, $id)
	{
		$testimony = Testimony::find($id);
		
		$request->merge(['date' => date('Y-m-d')]);
		
		$testimony->update($request->all());
		$testimony->save();
		
		return to_route('dashboard.index');
	}
	
	public function destroy($id)
	{
		$testimony = Testimony::find($id);
		$testimony->delete();
	
		return to_route('dashboard.index');
	}
}