<x-dashboard-header heading="Edit Player Information" />

<input type="hidden" name="player_id" value="{{ $player->id }}" />

<x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('First Name')" />
<x-text-input value="{{ $player->first_name }}" name="first_name" class="border-green-700 border-1 block w-full mb-5 text-sm" />

<x-input-label class="text-green-900 font-semi-bold" for="second_name" :value="__('Last Name')" />
<x-text-input value="{{ $player->second_name }}" name="second_name" class="border-green-700 border-1 block w-full mb-5 text-sm" />

 <x-large-button type="submit">
    {{ __('Update Player') }}
</x-large-button>