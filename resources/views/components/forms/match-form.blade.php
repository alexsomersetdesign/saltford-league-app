
{{-- Player 1 --}}
<div class="flex items-center gap-6 mb-10">
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" :value="__('Player 1')" />
      <x-forms.select-input :options="$players" :name="__('player_1_id')" />
   </div>

   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" :value="__('Player 1 Sets')" />
      <x-forms.number-input :name="__('player_1_sets')"/>
   </div>

   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4"  :value="__('Set 1 Games')" />
      <x-forms.number-input :name="__('player_1_set_1_games')" />
   </div>
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" :value="__('Set 2 Games')" />
      <x-forms.number-input :name="__('player_1_set_2_games')" />
   </div>
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4"  :value="__('Set 3 Games')" />
      <x-forms.number-input :name="__('player_1_set_3_games')" />
   </div>
</div>

{{-- Player 2 --}}
<div class="flex items-center gap-6">
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 2')" />
      <x-forms.select-input class="rounded-md" :options="$players" :name="__('player_2_id')" />
   </div>
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 2 Sets')" />
      <x-forms.number-input :name="__('player_2_sets')"/>
   </div>
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Set 1 Games')" />
      <x-forms.number-input :name="__('player_2_set_1_games')" />
   </div>
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Set 2 Games')" />
      <x-forms.number-input :name="__('player_2_set_2_games')"/>
   </div>
   <div class="flex items-center">
      <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Set 3 Games')" />
      <x-forms.number-input :name="__('player_2_set_3_games')"/>
   </div>
</div>
<x-large-button type="submit" class="mt-6">
   Complete Match
</x-large-button>


   



