
{{-- Player 1 --}}
<div class="flex items-center gap-4 mb-10">
   <x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('Player 1')" />
   <x-forms.select-input :options="$players" />

   <x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('Player 1 Sets')" />
   <x-forms.number-input />

   <x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('Player 1 Games')" />
   <x-forms.number-input />
</div>

{{-- Player 2 --}}
<div class="flex items-center gap-4">
   <x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('Player 2')" />
   <x-forms.select-input class="rounded-md" :options="$players" />

   <x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('Player 2 Sets')" />
   <x-forms.number-input />

   <x-input-label class="text-green-900 font-semi-bold" for="first_name" :value="__('Player 2 Games')" />
   <x-forms.number-input />
</div>


   



