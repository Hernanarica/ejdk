<?php
	/** @var \App\Models\Product $products */
?>
@extends('layout.layout-template')
@section('title', 'Productos')
@section('content')
	<section>

		<div class="bg-white">
			<div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
				<h2 class="sr-only">Products</h2>
				
				<div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
					
					@foreach($products as $product)
						<div class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
							<div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
								<img
									src="{{ asset('src/images/products/' . $product->image ) }}"
									alt="{{ $product->title }}"
									class="w-full h-full object-center object-cover sm:w-full sm:h-full">
							</div>
							<div class="flex-1 p-4 space-y-2 flex flex-col">
								<h3 class="text-sm font-medium text-gray-900">{{ $product->title }}</h3>
								<p class="text-sm text-gray-500">{{ $product->description }}</p>
							</div>
						</div>
					@endforeach
					
				</div>
			</div>
		</div>
	
	</section>
@endsection