@if($fixtures && $fixtures->count() > 0)
	<div class="grid grid-cols-12">
		<div class="col-span-8">
			<p class="font-bold">Opponent</p>
		</div>
		<div class="col-span-4">
			<p class="font-bold">Completion Date</p>
		</div>
	</div>
	@foreach($fixtures as $fixture)
		<div class="grid grid-cols-12 mt-3">
			<div class="col-span-8">
				<p>{{ $fixture->getOpponent->name }}</p>
			</div>
			<div class="col-span-4">
				<p>{{ $fixture->completion_date }}</p>
			</div>
		</div>
	@endforeach
@else
	<x-dashboard-header heading="No Upcoming Fixtures" />
@endif