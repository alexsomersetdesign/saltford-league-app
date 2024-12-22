<select name="{{ $name }}" class="min-w-32 border-green-700 rounded-md text-sm">
	@foreach($options as $option)
		<option class="text-sm" value={{ $option->id }}>{{ $option->first_name }} {{ $option->second_name }}</option>
	@endforeach
</select>