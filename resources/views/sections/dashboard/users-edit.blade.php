<?php
	/** @var \App\Models\User $user */
?>
@extends('layout.layout-template')
@section('title', 'Editar usuario')
@section('content')
	<section class="relative min-h-[calc(100vh-88px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
		
		<div class="absolute top-10 left-10">
			<a
				href="{{ route('dashboard.index') }}"
				class="inline-flex items-center px-3 py-2 mb-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700
				focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
			>
				<svg
					class="-ml-0.5 mr-2 h-4 w-4"
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="1.5"
					stroke="currentColor"
				>
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
				</svg>
				Volver
			</a>
		</div>
		
		<div class="max-w-md w-full space-y-8">
			<div>
				<img
					class="mx-auto h-16 w-auto"
					src="{{ asset('src/assets/imgs/logos/logo-ejdk.png') }}"
					alt="EJDK"
				>
				<h2 class="mt-6 text-center text-3xl tracking-tight font-bold text-gray-900">Editar usuario</h2>
			</div>
			<form class="mt-8 space-y-6" action="{{ route('users.update', [ 'id' => $user->id ]) }}" method="POST">
				@csrf
				@method('PATCH')
				<div class="rounded-md shadow-sm -space-y-px">
					<div>
						<label for="email" class="sr-only">Email</label>
						<input
							id="email"
							name="email"
							type="email"
							value="{{ old('email', $user->email) }}"
							class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
							placeholder="Email"
						>
						@error('email')
						<div class="bg-red-500 text-white flex items-center gap-2 my-2 py-1.5 px-2 rounded">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
							</svg>
							{{ $message }}
						</div>
						@enderror
					</div>
					<div>
						<label for="password" class="sr-only">Password</label>
						<input
							id="password"
							name="password"
							type="password"
							class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
							placeholder="Password"
						>
						@error('password')
						<div class="bg-red-500 text-white flex items-center gap-2 my-2 py-1.5 px-2 rounded">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
							</svg>
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				
				@if(Session('error'))
					<div class="bg-red-500 text-white flex items-center gap-2 my-2 py-1.5 px-2 rounded">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
						</svg>
						{{ Session('error') }}
					</div>
				@endif
				
				<div>
					<button
						type="submit"
						class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
					>
						Guardar
					</button>
				</div>
			</form>
		</div>
	</section>
@endsection