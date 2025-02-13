<select name="{{ $name }}" {{ $attributes->merge(['class' => 'min-w-32 border-green-700 rounded-md text-sm']) }}>
	@foreach($options as $option)
		<option class="text-sm" value={{ $option->id }}>{{ $option->name }}</option>
	@endforeach
</select>