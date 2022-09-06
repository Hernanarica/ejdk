<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('src/css/lightbox.min.css') }}">
		<script src="{{ asset('src/js/jquery-3.6.0.min.js') }}"></script>
		<script src="{{ asset('src/js/lightbox.js') }}"></script>
		@vite('resources/css/app.css')
{{--		<link rel="stylesheet" href="{{ asset('build/assets/app.8ceca43f.css') }}">--}}
		<title>Equipamientos JDK | @yield('title')</title>
	</head>
	<body>
		<header class="bg-gray-50">
			<div class="container mx-auto relative overflow-hidden">
				<div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
					
					@if(Route::currentRouteName() === 'home' || Route::currentRouteName() === 'products.index')
						<div class="relative h-full max-w-7xl mx-auto">
							<svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
								<defs>
									<pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
										<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
									</pattern>
								</defs>
								<rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
							</svg>
							<svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none"
							     viewBox="0 0 404 784">
								<defs>
									<pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
										<rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
									</pattern>
								</defs>
								<rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
							</svg>
						</div>
					@endif
					
				</div>
				
				@if(Route::currentRouteName() === 'home' || Route::currentRouteName() === 'products.index')
				<div class="relative pt-6 pb-16 sm:pb-24">
				@else
				<div class="relative pt-6 pb-16 sm:pb-6">
				@endif
					<div>
						<div class="max-w-7xl mx-auto px-4 sm:px-6">
							<nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
								<div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
									<div class="flex items-center justify-between w-full md:w-auto">
										<a href="{{ route('home') }}">
											<span class="sr-only">Equipamientos JDK</span>
											<img src="{{ asset('src/assets/imgs/logos/logo-ejdk.png') }}" alt="Equipamientos JDK" width="80">
										</a>
										<div class="-mr-2 flex items-center md:hidden">
											<button type="button" id="open-menu" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500
											hover:bg-gray-100
											focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
												<span class="sr-only">Open main menu</span>
												<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
													<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
												</svg>
											</button>
										</div>
									</div>
								</div>
								<div class="hidden md:flex md:space-x-10">
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#sobre-mi' : '/#sobre-mi' }}"
										class="font-medium text-gray-500 hover:text-gray-900"
									>
										Sobre mi
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#servicios' : '/#servicios' }}"
										class="font-medium text-gray-500 hover:text-gray-900"
									>
										Servicios
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#trabajos' : '/#trabajos' }}"
										class="font-medium text-gray-500 hover:text-gray-900"
									>
										Trabajos
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#testimonios' : '/#testimonios' }}"
										class="font-medium text-gray-500 hover:text-gray-900"
									>
										Testimonios
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#contacto' : '/#contacto' }}"
										class="font-medium text-gray-500 hover:text-gray-900"
									>
										Contacto
									</a>
									<a
										href="{{ route('products.index') }}"
										class="font-medium text-gray-500 hover:text-gray-900"
									>
										Productos
									</a>
									@auth()
										<form action="{{ route('logout') }}" method="post">
											@csrf
											<button class="flex font-medium text-gray-500 hover:text-gray-900">
												Cerrar sesion
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
												</svg>
											</button>
										</form>
									@endauth
								</div>
							</nav>
						</div>
						<div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right hidden" id="menu-mob">
							<div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
								<div class="px-5 pt-4 flex items-center justify-between">
									<div class="ml-auto">
										<button type="button" id="close-menu" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500
										hover:bg-gray-100
										focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
											<span class="sr-only">Close menu</span>
											<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
											</svg>
										</button>
									</div>
								</div>
								<div class="px-2 pt-2 pb-3">
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#sobre-mi' : '/#sobre-mi' }}"
										class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
									>
										Sobre mi
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#trabajos' : '/#trabajos' }}"
										class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
									>
										Trabajos
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#testimonios' : '/#testimonios' }}"
										class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
									>
										Testimonios
									</a>
									<a
										href="{{ Route::currentRouteName() === 'home' ? '#contacto' : '/#contacto' }}"
										class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
									>
										Contacto
									</a>
									<a
										href="{{ route('products.index') }}"
										class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50"
									>
										Productos
									</a>
								</div>
							</div>
						</div>
					</div>
					
					@if(Route::currentRouteName() === 'home' || Route::currentRouteName() === 'products.index')
						<section class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24" id="sobre mi">
							<h2 class="sr-only">Sobre mi</h2>
							<div class="text-center">
								<h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
									@if(Route::currentRouteName() === 'home')
										<span class="block xl:inline">Bienvenido a</span> <span class="block text-indigo-600 xl:inline">Equipamientos JDK</span>
									@else
										<span class="block xl:inline">Nuestros</span> <span class="block text-indigo-600 xl:inline">Productos</span>
									@endif
								</h1>
								@if(Route::currentRouteName() === 'home')
									<p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">Hola! Soy Daniel, técnico electronico con más de 5 anios de
										experiencia en el rubro de la electronica y reparaciones.
									</p>
									<div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
										<div class="rounded-md shadow">
											<a href="{{ route('home') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white
										bg-indigo-600
										hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Contactar
											</a>
										</div>
										<div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
											<a href="{{ route('home') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600
										bg-white
										hover:bg-gray-50 md:py-4 md:text-lg md:px-10"> Mis Trabajos
											</a>
										</div>
									</div>
								@else
									<p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
										Te presentamos nuestros productos, si necesitas alguno en especial podes consultarnos via Email o por Whatsapp.
									</p>
								@endif
							</div>
						</section>
					@endif
				</div>
				</div>
			</div>
		</header>
		<main>
		
		<div class="fixed inset-0 hidden items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start z-20" id="notification-email">
				<div class="w-full flex flex-col items-center space-y-4 sm:items-end">
					<div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto overflow-hidden">
						<div class="p-4">
							<div class="flex items-start">
								<div class="flex-shrink-0">
									<svg
										class="h-6 w-6 text-green-400"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										aria-hidden="true"
									>
										<path
											stroke-linecap="round"
											stroke-linejoin="round"
											d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
										/>
									</svg>
								</div>
								<div class="ml-3 w-0 flex-1 pt-0.5">
									<p class="text-sm font-medium text-gray-900">Email enviado!</p>
								</div>
								<div class="ml-4 flex-shrink-0 flex">
									<button type="button"
									        class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
									        id="close-notification-email">
										<span class="sr-only">Close</span>
										<svg
											class="h-5 w-5"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 20 20"
											fill="currentColor"
											aria-hidden="true"
										>
											<path
												fill-rule="evenodd"
												d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
												clip-rule="evenodd" />
										</svg>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		
		@if(Session::get('notification-message'))
				<x-notification message="{{ Session::get('notification-message') }}" />
			@endif
			
			@yield('content')
		</main>
		<footer class="bg-white pb-2">
			<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
				<div class="flex justify-center space-x-6 md:order-2">
					<a href="#" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">Facebook</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path fill-rule="evenodd"
							      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
							      clip-rule="evenodd" />
						</svg>
					</a>
					<a href="#" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">Instagram</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path fill-rule="evenodd"
							      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
							      clip-rule="evenodd" />
						</svg>
					</a>
					<a href="#" class="text-gray-400 hover:text-gray-500">
						<span class="sr-only">Twitter</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path
								d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
						</svg>
					</a>
				</div>
				<div class="mt-8 md:mt-0 md:order-1">
					<p class="text-center text-base text-gray-400">&copy; {{ now()->year }} todos los derechos reservados.</p>
				</div>
			</div>
			<div class="mt-8 md:mt-0 md:order-1">
				<p class="text-center text-sm text-gray-400">
					<a href="https://wa.me/541139361854" target="_blank">Created by @hernoDev 🚀</a>
				</p>
			</div>
		</footer>
		<script src="{{ asset('src/js/hamburgerMenu.js') }}"></script>
		@if(Session::get('notification-message'))
			<script src="{{ asset('src/js/notification.js') }}"></script>
		@endif
		@stack('js')
	</body>
</html>