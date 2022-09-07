<?php
	/** @var \App\Models\Testimony $testimonials */
	/** @var \App\Models\Product $products */
	/** @var \App\Models\User $users */
	/** @var \App\Models\Gallery $galleries */
?>
@extends('layout.layout-template')
@section('title', 'Panel de control')
@section('content')
	<section class="min-h-[calc(100vh-88px)] py-6 max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
		<h2 class="sr-only">Panel de control</h2>
		
		<!-- Main 3 column grid -->
		<div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
			
			<!-- column -->
			<div class="grid grid-cols-1 gap-4 lg:col-span-2">
				<div>
					<h2 class="sr-only" id="section-1-title">Mis productos</h2>
					<div class="rounded-lg bg-white overflow-hidden shadow">
						<div class="p-4">
							<!-- Your content -->
							<div class="flex justify-between items-center p-2 border-b">
								
								<div class="flex flex-col">
									<span class="text-lg text-gray-500">
										Productos
									</span>
									<a
										href="{{ route('dashboard_products.index') }}"
										class="text-indigo-600 text-sm"
									>
										Ver todos
									</a>
								</div>
								<a href="{{ route('products.create') }}"
								   type="button"
								   class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
									   focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
								>
									<!-- Heroicon name: mini/plus -->
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
									</svg>
								</a>
							
							</div>
							
							<ul class="space-y-4 mt-2 max-h-96 h-full overflow-auto p-2" id="custom-scroll">
							
								@foreach($products as $product)
									<li class="flex justify-between items-center">
										<div class="flex gap-3">
											<img
												src="https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
												alt="Image"
												class="w-24 rounded object-cover"
											>
											<div>
												<h3 class="text-gray-700 font-semibold">Producto N</h3>
												<p class="text-gray-500 text-sm max-w-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor fuga nostrum quae repellendus repudiandae.</p>
											</div>
										</div>
										
										<div>
											<div>
												<a
													href="{{ route('products.edit', [ 'id' => $product->id ]) }}"
													class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
												>
													Editar
												</a>
												<form
													action="{{ route('products.destroy', [ 'id' => $product->id ]) }}"
													method="POST"
													class="inline-block"
												>
													@csrf
													@method('DELETE')
													<button
														class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-red-700 bg-red-100 hover:bg-red-200
															focus:outline-none
															focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
													>
														Eliminar
													</button>
												</form>
											</div>
										</div>
									</li>
								@endforeach
								@if(count($products) === 0)
									<x-without-results-notification />
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<!-- column -->
			<div class="grid grid-cols-1 gap-4">
				<div>
					<h2 class="sr-only" id="section-2-title">Mis testimonios</h2>
					<div class="rounded-lg bg-white overflow-hidden shadow">
						<div class="p-4">
							<div class="flex justify-between items-center p-2 border-b">
								<div class="flex flex-col">
									<span class="text-lg text-gray-500">
										Testimonios
									</span>
									<a
										href="{{ route('dashboard_testimonials.index') }}"
										class="text-indigo-600 text-sm"
									>
										Ver todos
									</a>
								</div>
								<a href="{{ route('testimonials.create') }}"
								   type="button"
								   class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
									   focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
								>
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
									</svg>
								</a>
							
							</div>
							
							<ul class="space-y-4 mt-2 max-h-96 h-full overflow-auto p-2" id="custom-scroll">
								
								@foreach($testimonials as $testimony)
									<li>
										<div class="bg-white space-y-2">
											<div class="min-w-0 flex-1">
												<p class="text-sm font-medium text-gray-900">
													{{ $testimony->name }}
												</p>
												<p class="text-sm text-gray-500">
													{{ $testimony->date }}
												</p>
											</div>
											<p class="text-gray-500 text-sm">
												{{ $testimony->description }}
											</p>
											<div>
												<a
													href="{{ route('testimonials.edit', [ 'id' => $testimony->id ]) }}"
													class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
												>
													Editar
												</a>
												<form
													action="{{ route('testimonials.destroy', [ 'id' => $testimony->id ]) }}"
													method="POST"
													class="inline-block"
												>
													@csrf
													@method('DELETE')
													<button
														class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-red-700 bg-red-100 hover:bg-red-200
															focus:outline-none
															focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
													>
														Eliminar
													</button>
												</form>
											</div>
										</div>
									</li>
								@endforeach
								@if(count($testimonials) === 0)
									<x-without-results-notification />
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<!-- column -->
			<div class="grid grid-cols-1 gap-4">
				<div>
					<h2 class="sr-only" id="section-2-title">Usuarios</h2>
					<div class="rounded-lg bg-white overflow-hidden shadow">
						<div class="p-4">
							<!-- Your content -->
							<div class="flex justify-between items-center p-2 border-b">
								
								<div class="flex flex-col">
									<span class="text-lg text-gray-500">
										Usuarios
									</span>
									<a
										href="{{ route('dashboard_users.index') }}"
										class="text-indigo-600 text-sm"
									>
										Ver todos
									</a>
								</div>
								<a href="{{ route('users.create') }}"
								   class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
									   focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
								>
									<!-- Heroicon name: mini/plus -->
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
									</svg>
								</a>
							
							</div>
							
							<ul class="space-y-4 mt-2 max-h-96 h-full overflow-auto p-2" id="custom-scroll">
							
								@foreach($users as $user)
									<li>
										<div class="flex items-center">
											<div>
												<h3 class="text-base leading-6 font-medium text-gray-900">{{ $user->name }}</h3>
												<p class="text-sm text-gray-500">
													<a href="#">
														{{ $user->email }}
													</a>
												</p>
											</div>
											<div class="ml-auto">
												<a
													href="{{ route('users.edit', [ 'id' => $user->id ]) }}"
													class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
												>
													Editar
												</a>
												<form
													action="{{ route('users.destroy', [ 'id' => $user->id ]) }}"
													method="post"
													class="inline-block"
												>
													@csrf
													@method('DELETE')
													<button
														class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-red-700 bg-red-100 hover:bg-red-200
														focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
													>
														Eliminar
													</button>
												</form>
											</div>
										</div>
									</li>
								@endforeach
								@if(count($users) === 0)
									<x-without-results-notification />
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<!-- column -->
			<div class="grid grid-cols-1 gap-4 lg:col-span-2">
				<div>
					<h2 class="sr-only" id="section-1-title">Galeria</h2>
					<div class="rounded-lg bg-white overflow-hidden shadow">
						<div class="p-4">
							<!-- Your content -->
							<div class="flex justify-between items-center p-2 border-b">
								
								<div class="flex flex-col">
									<span class="text-lg text-gray-500">
										Galeria
									</span>
									<a
										href="{{ route('dashboard_gallery.index') }}"
										class="text-indigo-600 text-sm"
									>
										Ver todos
									</a>
								</div>
								<a href="{{ route('gallery.create') }}"
								   class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
									   focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
								>
									<!-- Heroicon name: mini/plus -->
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
									</svg>
								</a>
							
							</div>
							
							<ul class="space-y-4 mt-2 max-h-96 h-full overflow-auto p-2" id="custom-scroll">
								
								@foreach($galleries as $gallery)
									<li class="flex justify-between items-center">
										<div class="flex gap-3">
											<img
												src="https://images.unsplash.com/photo-1513880989635-6eb491ce7f5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
												alt="Image"
												class="w-24 rounded object-cover"
											>
											<div>
												<h3 class="text-gray-700 font-semibold">{{ $gallery->title }}</h3>
												<p class="text-gray-500 text-sm max-w-sm">{{ $gallery->description }}</p>
											</div>
										</div>
										<div>
											<div>
												<a
													href="{{ route('gallery.edit', [ 'id' => $gallery->id ]) }}"
													class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
												>
													Editar
												</a>
												<form
													action="{{ route('gallery.destroy', [ 'id' => $gallery->id ]) }}"
													method="POST"
													class="inline-block"
												>
													@csrf
													@method('DELETE')
													<button
														class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-red-700 bg-red-100 hover:bg-red-200
															focus:outline-none
															focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
													>
														Eliminar
													</button>
												</form>
											</div>
										</div>
									</li>
								@endforeach
								@if(count($galleries) === 0)
									<x-without-results-notification />
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</section>
@endsection