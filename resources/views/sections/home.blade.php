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
				<p class="mt-6 max-w-3xl text-xl text-gray-300">Ofrezco servicios varios en electronica, soporte técnico/reparaciones en general, me importa la opinion y la satisfaction
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
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
						<img
							src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
							alt=""
							class="image object-cover pointer-events-none group-hover:opacity-75"
							data-lightbox="image-1"
							data-title="My caption"
						>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
				    data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>
			<li class="relative">
				<div class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
					<img
						src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						alt=""
						class="image object-cover pointer-events-none group-hover:opacity-75"
						data-lightbox="image-1"
						data-title="My caption"
					>
					<a
						href="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
						class="absolute inset-0 focus:outline-none"
						data-lightbox="image-1"
						data-title="My caption"
					>
						<span class="sr-only">Ver mas</span>
					</a>
				</div>
				<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">Nombre</p>
				<p class="block text-sm font-medium text-gray-500 pointer-events-none">Descripcion corta</p>
			</li>

		</ul>
	
	</section>
	<section class="mt-32" id="testimonios">
		<h2 class="sr-only">Testimonios</h2>

		<div>
			<div class="max-w-7xl mx-auto md:grid md:grid-cols-2 md:px-6 lg:px-8">
				<div class="md:py-12 px-4 sm:px-6 md:flex md:flex-col md:py-16 md:pl-0 md:pr-10 md:border-r md:border-gray-900 lg:pr-16">
					<blockquote class="mt-6 md:flex md:flex-col">
						<div class="relative text-lg font-medium text-white md:flex-grow">
							<svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
								<path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
							</svg>
							<p class="relative text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in
								laborum sed rerum et corporis.</p>
						</div>
						<footer class="mt-8">
							<div class="flex items-start">
								<div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
									<img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								</div>
								<div class="ml-4">
									<div class="text-base font-medium text-gray-600">Judith Black</div>
									<div class="text-base font-medium text-gray-400">CEO, Tuple</div>
								</div>
							</div>
						</footer>
					</blockquote>
				
				</div>
				<div class="md:py-12 px-4 md:border-gray-900 sm:px-6 md:py-16 md:pr-0 md:pl-10 md:border-t-0 md:border-l lg:pl-16">
					<blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
						<div class="relative text-lg font-medium text-white md:flex-grow">
							<svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200" fill="currentColor" viewBox="0 0 32 32">
								<path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
							</svg>
							<p class="relative text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in
								laborum sed rerum et corporis. Nemo expedita voluptas culpa sapiente alias molestiae.</p>
						</div>
						<footer class="mt-8">
							<div class="flex items-start">
								<div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
									<img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								</div>
								<div class="ml-4">
									<div class="text-base font-medium text-gray-600">Joseph Rodriguez</div>
									<div class="text-base font-medium text-gray-400">CEO, Workcation</div>
								</div>
							</div>
						</footer>
					</blockquote>
					<blockquote class="mt-6 md:flex-grow md:flex md:flex-col">
						<div class="relative text-lg font-medium text-white md:flex-grow">
							<svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200" fill="currentColor" viewBox="0 0 32 32">
								<path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
							</svg>
							<p class="relative text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in
								laborum sed rerum et corporis. Nemo expedita voluptas culpa sapiente alias molestiae.</p>
						</div>
						<footer class="mt-8">
							<div class="flex items-start">
								<div class="flex-shrink-0 inline-flex rounded-full border-2 border-white">
									<img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
								</div>
								<div class="ml-4">
									<div class="text-base font-medium text-gray-600">Joseph Rodriguez</div>
									<div class="text-base font-medium text-gray-400">CEO, Workcation</div>
								</div>
							</div>
						</footer>
					</blockquote>
				
				</div>
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
							<label for="message" class="block text-sm font-medium text-gray-700">Message</label>
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