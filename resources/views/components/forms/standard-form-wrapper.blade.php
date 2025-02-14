<form method="{{ $method }}" action="{{ $route }}" class="border border-green-700 px-6 py-8 rounded-md">
	@csrf
	 {{ $slot }}
</form>