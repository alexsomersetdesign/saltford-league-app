<form method="{{ $method }}" action="{{ $route }}" class="border border-green-700 px-10 py-10 rounded-md">
	@csrf
	 {{ $slot }}
</form>