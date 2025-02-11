
<div class="grid grid-cols-12 items-start">
    <div class="col-span-4">
        <div class="flex items-center gap-4 mb-5">
            <div class="flex items-center">
               <x-forms.input-label class="text-green-900 font-semi-bold me-4" :value="__('Player 1')" />
               <x-forms.select-input :options="$players" :name="__('player_1_id')" />
            </div>
         </div>
         <div class="flex items-center gap-4">
            <div class="flex items-center">
               <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="first_name" :value="__('Player 2')" />
               <x-forms.select-input class='rounded-md ml-auto mr-0' :options="$players" :name="__('player_2_id')" />
            </div>
         </div>
    </div>
    <div class="col-span-8">
        <div class="flex items-center gap-4 mb-5 justify-end">
            <x-forms.input-label class="text-green-900 font-semi-bold me-4" for="date" :value="__('Completion Date')" />
            <x-forms.date-input name="completion_date" class="border-green-700 border-1 block w-full mb-5 text-sm" />
        </div>
        <x-large-button type="submit" class="float-right">
            Create Fixture
         </x-large-button>
    </div>
</div>

 
 
    
 
 
 
 