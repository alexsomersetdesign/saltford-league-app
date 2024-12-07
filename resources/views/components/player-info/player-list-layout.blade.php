<ul class="text-center">
	@foreach($players as $player)
		<x-player-info.player-list-item :player="$player" />
	@endforeach
</ul>