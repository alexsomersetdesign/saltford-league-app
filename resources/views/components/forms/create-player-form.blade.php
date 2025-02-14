<x-forms.input-label class="text-green-900 font-semi-bold" for="name" :value="__('Name')" />
<x-forms.text-input name="name" class="border-green-700 border-1 block w-full mb-5 text-sm" />
<x-forms.input-label class="text-green-900 font-semi-bold" for="email" :value="__('Email')" />
<x-forms.text-input name="email" class="border-green-700 border-1 block w-full mb-5 text-sm" />
<x-forms.input-label class="text-green-900 font-semi-bold" for="password" :value="__('Password')" />
<x-forms.text-input name="password" class="border-green-700 border-1 block w-full mb-5 text-sm" />
<!-- <x-forms.input-label class="text-green-900 font-semi-bold" for="password" :value="__('Password Confirm')" />
<x-forms.text-input name="password_confirm" class="border-green-700 border-1 block w-full mb-5 text-sm" /> -->
 <x-large-button type="submit">
    {{ __('Create Player') }}
</x-large-button>