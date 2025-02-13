<x-dashboard-header heading="Edit Player Information" />

<input type="hidden" name="player_id" value="{{ $player->id }}" />

<x-forms.input-label class="text-green-900 font-semi-bold" for="name" :value="__('Name')" />
<x-forms.text-input value="{{ $player->name }}" name="name" class="border-green-700 border-1 block w-full mb-5 text-sm" />

<x-forms.input-label class="text-green-900 font-semi-bold" for="email" :value="__('Email')" />
<x-forms.text-input value="{{ $player->email }}" name="email" class="border-green-700 border-1 block w-full mb-5 text-sm" />
    

 <x-large-button type="submit">
    {{ __('Update Player') }}
</x-large-button>