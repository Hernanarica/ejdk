<?php
	/** @var \App\Models\Gallery $gallery */
?>@extends('layout.layout-template')
@section('title', 'Editar item de galeria')
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
			<h2 class="mt-6 text-center text-3xl tracking-tight font-bold text-gray-900">Editar Item de galeria</h2>
		</div>
		
		<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
			<div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
				<form
					class="space-y-6"
					action="{{ route('gallery.update', [ 'id' => $gallery->id ]) }}"
					method="POST"
					enctype="multipart/form-data"
				>
					@csrf
					@method('PATCH')
					<div>
						<label
							for="title"
							class="block text-sm font-medium text-gray-700"
						>
							Titulo
						</label>
						<div class="mt-1">
							<input
								id="title"
								name="title"
								type="text"
								class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
								value="{{ old('title', $gallery->title) }}"
							>
							@error('title')
								<x-error-notification-input>
									{{ $message }}
								</x-error-notification-input>
							@enderror
						</div>
					</div>
					
					<div>
						<label
							for="description"
							class="block text-sm font-medium text-gray-700"
						>
							Description
						</label>
						<div class="mt-1">
							<textarea
								id="description"
								name="description"
								class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
							>{{ old('description', $gallery->description) }}</textarea>
							@error('description')
								<x-error-notification-input>
									{{ $message }}
								</x-error-notification-input>
							@enderror
						</div>
					</div>
					
					<div>
						<label
							class="relative inline-flex w-full justify-center items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50
							focus:z-10
							focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 cursor-pointer"
							for="image"
						>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-ml-1 mr-2 h-5 w-5 text-gray-400">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
							</svg>
							Subir imagen
						</label>
						
						<input
							type="file"
							name="image"
							id="image"
							class="sr-only"
						>
						@error('image')
							<x-error-notification-input>
								{{ $message }}
							</x-error-notification-input>
						@enderror
					</div>
					
					<div id="imagePreviewContainer">
						<img
							src="{{ asset('src/images/gallery/' . $gallery->image) }}"
							alt="Imagen"
							id="imagePreview"
						>
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
	@push('js')
		<script>
			const $image = document.getElementById('image');
			const $imagePreviewContainer = document.getElementById('imagePreviewContainer');
			
			$image.addEventListener('change', e => {
				const previewImage = document.getElementById('imagePreview');
				
				previewImage.src = URL.createObjectURL(e.currentTarget.files[0]);
				previewImage.alt = e.currentTarget.files[0].name;
			});
		</script>
	@endpush
@endsection