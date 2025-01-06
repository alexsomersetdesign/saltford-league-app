@php
	$leaderboard_players = $players->sortByDesc('points');
@endphp
<ul class="leaderboard border border-green-700 rounded-md px-10 py-5">
	<li class="flex mb-3">
		<p class="font-bold">Name</p>
		<span class="font-bold mr-0 ml-auto">Points</span>
	</li>
	@foreach($leaderboard_players as $player)
		<x-leaderboard.dashboard-leaderboard-player :player="$player" />
	@endforeach
</ul>