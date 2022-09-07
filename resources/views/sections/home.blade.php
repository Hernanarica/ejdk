<?php
	/** @var \App\Models\Gallery $galleryItems */
	/** @var \App\Models\Testimony $testimonials */
?>
@extends('layout.layout-template')@section('title', 'Bienvenido')
@section('content')
	<section id="servicios">
		<div class="relative pb-32 bg-gray-800">
			<div class="absolute inset-0">
				<img
					class="w-full h-full object-cover"
					src="{{ asset('src/assets/imgs/banners/banner-hero.jpg') }}"
					alt="Banner Hero"
				>
				<div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
			</div>
			<div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
				<h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Servicios</h1>
				<p class="mt-6 max-w-3xl text-xl text-gray-300">Ofrezco servicios varios en electrónica, soporte técnico/reparaciones en general, me importa la opinión y la satisfacción
					del cliente con mi trabajo y es por eso que me esfuerzo en mantener una línea directa con el cliente asesorándolo en sus consultas.
				</p>
			</div>
		</div>
		<div class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8">
			<h2 class="sr-only">Mis servicios</h2>
			<div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
				<div class="flex flex-col bg-white rounded-2xl shadow-xl">
					<div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
						<div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round"
								      d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
							</svg>
						</div>
						<h3 class="text-xl font-medium text-gray-900">Electronica</h3>
						<p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed
							lacus, fames.
						</p>
					</div>
				</div>
				<div class="flex flex-col bg-white rounded-2xl shadow-xl">
					<div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
						<div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round"
								      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
							</svg>
						</div>
						<h3 class="text-xl font-medium text-gray-900">Soporte técnico</h3>
						<p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed
							lacus, fames.
						</p>
					</div>
				</div>
				<div class="flex flex-col bg-white rounded-2xl shadow-xl">
					<div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
						<div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round"
								      d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
							</svg>
						</div>
						<h3 class="text-xl font-medium text-gray-900">Presupuesto sin cargo</h3>
						<p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed
							lacus, fames.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="px-4 container mx-auto md:px-4" id="trabajos">
		<h2 class="sr-only">Mis trabajos</h2>
		<ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
			
			@foreach($galleryItems as $galleryItem)
				<li class="relative">
					<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
						<img
							src="{{ asset('src/images/gallery/' . $galleryItem->image ) }}"
							alt="{{ $galleryItem->title }}"
							class="image object-cover pointer-events-none group-hover:opacity-75"
							data-lightbox="{{ $galleryItem->title }}"
							data-title="{{ $galleryItem->title }}"
						>
						<a
							href="{{ asset('src/images/gallery/' . $galleryItem->image ) }}"
							class="absolute inset-0 focus:outline-none"
							data-lightbox="{{ $galleryItem->title }}"
							data-title="{{ $galleryItem->title }}"
						>
							<span class="sr-only">Ver mas</span>
						</a>
					</div>
					<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $galleryItem->title }}</p>
					<p class="block text-sm font-medium text-gray-500 pointer-events-none">{{ $galleryItem->description }}</p>
				</li>
			@endforeach

		</ul>
	
	</section>
	<section class="mt-32" id="testimonios">
		<h2 class="sr-only">Testimonios</h2>
		
		<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
			<div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
				
				@foreach($testimonials as $testimonial)
					<div class="p-8 bg-white border rounded shadow-sm">
						<p class="mb-3 text-xs font-semibold tracking-wide uppercase">
							<span class="text-gray-600">{{ $testimonial->created_at->diffForHumans() }}</span>
						</p>
						<p class="mb-5 text-gray-700">{{ $testimonial->description }}</p>
						<div class="flex items-center">
							<div class="mr-3">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10">
									<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
								</svg>
							</div>
							<div>
								<p class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-400">{{ $testimonial->name }}</p>
							</div>
						</div>
					</div>
				@endforeach
				
			</div>
		</div>
		
	</section>
	<section id="contacto">
		<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
			<div class="relative max-w-xl mx-auto">
				<svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
					<defs>
						<pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
							<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
						</pattern>
					</defs>
					<rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
				</svg>
				<svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
					<defs>
						<pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
							<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
						</pattern>
					</defs>
					<rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
				</svg>
				<div class="text-center">
					<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:tracking-tight">Contactame!</h2>
					<p class="mt-4 text-lg leading-6 text-gray-500">Podes escribirme para algun presupuesto o consulta sobre mis servicios, te respondere lo mas pronto posible.</p>
				</div>
				<div class="mt-12">
					<form
						action="#"
						class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8"
						id="form"
					>
						<div>
							<label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
							<div class="mt-1">
								<input
									type="text"
									name="name"
									id="name"
									class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
								>
							</div>
						</div>
						<div>
							<label for="last-name" class="block text-sm font-medium text-gray-700">Apellido</label>
							<div class="mt-1">
								<input
									type="text"
									name="last-name"
									id="last-name"
									class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
								>
							</div>
						</div>
						<div class="sm:col-span-2">
							<label for="business" class="block text-sm font-medium text-gray-700">Empresa</label>
							<div class="mt-1">
								<input
									type="text"
									name="business"
									id="business"
									class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
								>
							</div>
						</div>
						<div class="sm:col-span-2">
							<label for="email" class="block text-sm font-medium text-gray-700">Email</label>
							<div class="mt-1">
								<input
									id="email"
									name="email"
									type="email"
									class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
								>
							</div>
						</div>
						<div class="sm:col-span-2">
							<label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
							<div class="mt-1 relative rounded-md shadow-sm">
								<input
									type="text"
									name="phone"
									id="phone"
									class="py-3 px-4 block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
								>
							</div>
						</div>
						<div class="sm:col-span-2">
							<label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
							<div class="mt-1">
								<textarea
									id="message"
									name="message"
									rows="4"
									class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"
								></textarea>
							</div>
						</div>
						<div class="sm:col-span-2">
							<button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium
							text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</section>
@endsection
@if(Session::get('notification-message'))
	<script src="{{ asset('src/js/notification.js') }}"></script>
@endif
@push('js')
	@vite('resources/js/app.js')
@endpush