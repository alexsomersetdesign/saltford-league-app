<x-guest-layout>
	<x-slot name="header">
		<x-application-logo class="w-32 h-32 mx-auto mb-5" />
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Saltford Tennis Club Mens Singles League') }}
            <span id="year"></span>
        </h2>
        <div class="bg-green-900 px-7 py-7 mt-10 rounded-md">
            <div class="flex">
                <h4 class="text-3xl font-semibold text-white">Player</h4>
                <h4 class="text-3xl font-semibold text-white ml-auto mr-0">Points</h4>
            </div>
            <ul class="flex flex-col gap-y-5 mt-12">
                @foreach($ordered_players as $player)
                    <x-leaderboard.guest-leaderboard-player :player="$player" />
                @endforeach
            </ul>
        </div>
    </x-slot>
    @push('scripts')
        <script>
            //Calculate year
            const year = new Date().getFullYear();
            console.log(year);
            document.getElementById('year').textContent = year;
        </script>
    @endpush
</x-guest-layout>