<div class="leaderboard border border-green-700 rounded-md px-6 py-8">
	<div class="grid grid-cols-12 mb-3">
		<div class="col-span-4">
			<p class="font-bold">Player 1</p>
		</div>
		<div class="col-span-4">
			<p class="font-bold">Player 2</p>
		</div>
		<div class="col-span-4">
			<p class="font-bold">Completion Date</p>
		</div>
	</div>
	@foreach($fixtures as $fixture)
		<div class="grid grid-cols-12">
			<div class="col-span-4">
				{{ $fixture->getPlayerOne->name }}
			</div>
			<div class="col-span-4">
				{{ $fixture->getPlayerTwo->name }}
			</div>
			<div class="col-span-4">
				{{ $fixture->completion_date }}
			</div>
		</div>
	@endforeach
</div>