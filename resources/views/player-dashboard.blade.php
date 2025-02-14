<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-12">
                <div class="col-span-6 py-4 px-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <x-dashboard-header heading="Upcoming Fixtures" />
                    <x-player-dashboard.player-fixtures :fixtures="$fixtures" />
                </div>
                <!-- <div class="col-span-4 py-4 px-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <x-dashboard-header heading="Upcoming Fixtures" />
                </div>
                <div class="col-span-4 py-4 px-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <x-dashboard-header heading="Upcoming Fixtures" />
                </div> -->
            </div>
        </div>
    </div>
</x-app-layout>
