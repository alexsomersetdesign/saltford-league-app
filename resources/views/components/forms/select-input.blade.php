<select class="min-w-32 border-green-700 rounded-md">
	@foreach($options as $option)
		<option>{{ $option->first_name }} {{ $option->second_name }}</option>
	@endforeach
</select>