<?php


namespace App\Repositories;

use App\Models\Player;

class PlayerRepository {

	public function addGamesToPlayers($player_1, $player_2, $player_1_games, $player_2_games) {


		//Add games
		$player_1->games = $player_1->games + $player_1_games;
		$player_2->games = $player_2->games + $player_2_games;

		//Save Player
		$player_1->save();
		$player_2->save();


	}

	public function addSetsAndPointsToPlayers($player_1, $player_2, $player_1_sets, $player_2_sets) {

		//Add sets
		$player_1->sets = $player_1->sets + $player_1_sets;
		$player_2->sets = $player_2->sets + $player_2_sets;

		//Add points, currently a point per set
		$player_1->points = $player_1->points + $player_1_sets;
		$player_2->points = $player_2->points + $player_2_sets;

		//Save Player
		$player_1->save();
		$player_2->save();

		//Determine the winner and return after creation of records
		if($player_1_sets > $player_2_sets) {
			$winning_player = $player_1->id;
		} else {
			$winning_player = $player_1->id;
		}

		return $winning_player;
		
	}

	
}