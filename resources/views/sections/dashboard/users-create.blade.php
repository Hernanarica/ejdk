@extends('layout.layout-template')
@section('title', 'Crear usuario')
@section('content')
	<div class="relative min-h-[calc(100vh-88px)] flex flex-col justify-center py-12 sm:px-6 lg:px-8">
		
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
		
		<div class="sm:mx-auto sm:w-full sm:max-w-md">
			<img
				class="mx-auto h-16 w-auto"
				src="{{ asset('src/assets/imgs/logos/logo-ejdk.png') }}"
				alt="Workflow">
			<h2 class="mt-6 text-center text-3xl tracking-tight font-bold text-gray-900">Crear usuario</h2>
		</div>
		
		<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
			<div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
				<form class="space-y-6" action="{{ route('users.store') }}" method="POST">
					<div>
						<label
							for="email"
							class="block text-sm font-medium text-gray-700"
						>
							Email
						</label>
						<div class="mt-1">
							<input
								id="email"
								name="email"
								type="email"
								class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
							>
						</div>
					</div>
					
					<div>
						<label
							for="password"
							class="block text-sm font-medium text-gray-700"
						>
							Password
						</label>
						<div class="mt-1">
							<input
								type="password"
								id="password"
								name="password"
								class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
							>
						</div>
					</div>
					
					<div>
						<button
							type="submit"
							class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
						>
							Guardar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection