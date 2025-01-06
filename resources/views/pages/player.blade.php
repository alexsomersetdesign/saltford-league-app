<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $player->first_name }} {{ $player->second_name }} <span class="font-light hidden text-sm ms-3">Seeded({{ $player->seeding }})</span>
        </h2>
    </x-slot>
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('message'))
                        <x-message message="{{ session('message') }}" />
                    @endif
                    <div class="grid grid-cols-12">
                        <div class="col-span-6">
                            <div class="grid grid-cols-12">
                                <div class="col-span-4">
                                    <x-dashboard-header heading="Performance Stats" />
                                    @if($played_matches && $played_matches->count() > 0)
                                        <p class="text-green-900 text-lg font-semibold mb-4">Matches Played:<span class="ms-4">{{ $played_matches->count() }}</span></p>
                                        <p class="text-green-900 text-lg font-semibold mb-4">Matches Won:<span class="ms-4">{{ $matches_won->count() }}</span></p>
                                        @if(isset($matches_won) && $matches_won->count() > 0)
                                            <p class="text-green-900 text-lg font-semibold mb-4">Win Percentage:<span class="ms-4">{{ $matches_won->count() / $played_matches->count() * 100 }}%</span></p>
                                        @else
                                             <p class="text-green-900 text-lg font-semibold mb-4">Win Percentage:<span class="ms-4">0%</span></p>
                                        @endif
                                        <p class="text-green-900 text-lg font-semibold mb-4">Games Won<span class="ms-4">{{ $player->games }}</span></p>
                                        <p class="text-green-900 text-lg font-semibold mb-4">Sets Won<span class="ms-4">{{ $player->sets }}</span></p>

                                    @else
                                    <p class="text-green-900 text-lg font-semibold mb-4">Player has played no matches</p>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-span-6">
                            <x-forms.standard-form-wrapper method="POST" route="/edit-player">
                                <x-forms.edit-player-form :player="$player"/>
                            </x-forms.standard-form-wrapper>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
