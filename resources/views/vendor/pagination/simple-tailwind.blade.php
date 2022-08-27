@if ($paginator->hasPages())
	<nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6" aria-label="Pagination">
		<div class="hidden sm:block">
			<p class="text-sm text-gray-700">
				Mostrando de
				<span class="font-medium">1</span>
				a
				<span class="font-medium">5</span>
				resultados
			</p>
		</div>
		<div class="flex-1 flex justify-between sm:justify-end">
			@if($paginator->onFirstPage())
				<span class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white opacity-70 cursor-not-allowed">
					{!! __('pagination.previous') !!}
				</span>
			@else
				<a
					href="{{ $paginator->previousPageUrl() }}"
					class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 cursor-pointer"
				>
					{!! __('pagination.previous') !!}
				</a>
			@endif
			
			@if($paginator->hasMorePages())
				<a
					href="{{ $paginator->nextPageUrl() }}"
					class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 cursor-pointer"
				>
					{!!__('pagination.next') !!}
				</a>
			@else
				<span class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white opacity-70 cursor-not-allowed">
					{!! __('pagination.next') !!}
				</span>
			@endif
		</div>
	</nav>
@endif