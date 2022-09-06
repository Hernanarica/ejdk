<?php
	/** @var \App\Models\Gallery $galleries */
?>
@extends('layout.layout-template')
@section('title', 'Galeria')
@section('content')
	<section class="min-h-[calc(100vh-88px)] max-w-7xl mx-auto mt-8">
		<div class="px-4 sm:px-6 lg:px-8">
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
			<div class="sm:flex sm:items-center">
				<div class="sm:flex-auto">
					<h1 class="text-xl font-semibold text-gray-900">Galeria</h1>
					<p class="mt-2 text-sm text-gray-700">Lista de todos tus items en la galeria</p>
				</div>
			</div>
			<div class="mt-8 flex flex-col">
				<div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
						<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
							<table class="min-w-full divide-y divide-gray-300">
								<thead class="bg-gray-50">
									<tr>
										<th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Imagen</th>
										<th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Nombre</th>
										<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
										<th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
											<span class="sr-only">Edit</span>
										</th>
									</tr>
								</thead>
								<tbody class="divide-y divide-gray-200 bg-white">
									
									@foreach($galleries as $gallery)
										<tr>
											<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
												<img
													src="{{ $gallery->image }}"
													alt="{{ $gallery->title }}"
													class="w-32 object-cover"
												>
											</td>
											<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $gallery->title }}</td>
											<td class="px-3 py-4 text-sm text-gray-500 max-w-2xl">{{ $gallery->description }}</td>
											<td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
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
											</td>
										</tr>
									@endforeach
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="max-w-7xl mx-auto mt-4">
				{{ $galleries->links() }}
			</div>
		</div>
	</section>
@endsection