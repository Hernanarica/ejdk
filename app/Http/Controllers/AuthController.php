<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function index()
	{
		return view('sections.login.login');
	}
	
	public function login(AuthRequest $request)
	{
		$credentials = $request->only('email', 'password');
		
		if (Auth::attempt($credentials)) return to_route('dashboard.index');
		
		return back()->with([
			'error' => 'Las credenciales ingresadas son incorrectas'
		]);
	}
	
	public function logout()
	{
		Auth::logout();
		
		return to_route('login.index');
	}
}
