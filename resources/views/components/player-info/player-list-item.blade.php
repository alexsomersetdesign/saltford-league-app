<li class="font-semibold text-md text-green-900 flex items-center gap-4 mb-3">
	{{ $player->first_name }} {{ $player->second_name }}
	
	<x-player-info.player-link :link="$player->id" class="bg-green-700 text-white px-2 py-1 ml-auto mr-0">
        {{ __('Player Info') }}
    </x-player-info.player-link>
</li>