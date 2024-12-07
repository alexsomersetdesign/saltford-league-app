<x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('First Name')" />
<x-text-input name="first_name" class="border-green-700 border-1 block w-full mb-5" />
<x-input-label class="text-green-900 font-semi-bold" for="second_name" :value="__('Second Name')" />
<x-text-input name="second_name" class="border-green-700 border-1 block w-full mb-5" />
 <x-large-button type="submit">
    {{ __('Create Player') }}
</x-large-button>