<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('message'))
                        <x-message message="{{ session('message') }}" />
                    @endif
                    <div class="grid grid-cols-12 gap-12">
                        <div class="col-span-4">
                            <x-dashboard-header heading="Create Players" />
                            <x-forms.standard-form-wrapper method="POST" route="/create-player">
                                <x-forms.create-player-form />
                            </x-standard-form-wrapper>
                        </div>

                        <div class="col-span-4">
                            @if($players && $players->count() > 0)
                                <x-dashboard-header heading="Active Players" />
                                <x-player-info.player-list-layout :players="$players" />

                            @else
                                <x-dashboard-header heading="No Active Players" />
                            @endif
                        </div>
                        <div class="col-span-4">
                            <x-dashboard-header heading="Leaderboard" />
                            <x-leaderboard.dashboard-leaderboard :players="$players" />
                        </div>
                        <div class="col-span-12">
                            <x-dashboard-header heading="Match" />
                            <x-forms.standard-form-wrapper method="POST" route="/complete-match">
                                <x-forms.match-form :players="$players" />
                            </x-standard-form-wrapper>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
