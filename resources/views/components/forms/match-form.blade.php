
{{-- Player 1 --}}
<div class="flex items-center gap-6 mb-10">
   <div class="flex items-center">
      <x-input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 1')" />
      <x-forms.select-input :options="$players" />
   </div>

   <div class="flex items-center">
      <x-input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 1 Sets')" />
      <x-forms.number-input />
   </div>

   <div class="flex items-center">
      <x-input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 1 Games')" />
      <x-forms.number-input />
   </div>
</div>

{{-- Player 2 --}}
<div class="flex items-center gap-6">
   <div class="flex items-center">
      <x-input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 2')" />
      <x-forms.select-input class="rounded-md" :options="$players" />
   </div>
   <div class="flex items-center">
      <x-input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 2 Sets')" />
      <x-forms.number-input />
   </div>
   <div class="flex items-center">
      <x-input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 2 Games')" />
      <x-forms.number-input />
   </div>
</div>


   



