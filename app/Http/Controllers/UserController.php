<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function index()
	{
		return view('sections.dashboard.users');
	}
	
	public function create()
	{
		return view('sections.dashboard.users-create');
	}
	
	public function edit($id)
	{
		$user = User::find($id);
		
		return view('sections.dashboard.users-edit', compact('user'));
	}
	
	public function update(UserRequest $request, $id)
	{
		$user           = User::find($id);
		$user->email    = $request->email;
		$user->password = Hash::make($request->password);
		
		$user->save();
		
		return to_route('dashboard.index')->with([
			'notification-message' => 'Usuario actualizado con éxito'
		]);
	}
	
	public function destroy($id)
	{
		User::find($id)->delete();
		
		return to_route('dashboard.index')->with([
			'notification-message' => 'Usuario eliminado con éxito'
		]);
	}
}