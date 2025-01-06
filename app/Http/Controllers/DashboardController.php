<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Player;
use App\Models\CompletedMatch;
use App\Repositories\PlayerRepository;

class DashboardController extends Controller {

	public function __construct(
        PlayerRepository $player_repository
        
    ) {
        $this->player_repository = $player_repository;
      
    }


	public function showDashboard(Request $request) {

		$players = Player::get();

		return view('dashboard', compact('players'));
	}

	public function createPlayer(Request $request) {
		$input = $request->all();
		
		$player = Player::create([
			'first_name' => $input['first_name'],
			'second_name' => $input['second_name'],
		]);

		return back()->with('message', 'Player Successfully Added');
	}

	public function editPlayer(Request $request) {
		$input = $request->all();
		$player = Player::where('id', $input['player_id'])->first();

		$player->first_name = $input['first_name'];
		$player->second_name = $input['second_name'];
		$player->save();

		return back()->with('message', 'Player Details Successfully Updated');

	}

	public function playerDetails(Request $request) {

		$player = Player::where('id', $request->id)->first();

		$played_matches = CompletedMatch::where('player_1_id', $player->id)->orWhere('player_2_id', $player->id)->get();
		$matches_won = CompletedMatch::where('winner', $player->id)->get();

		return view('pages.player', compact('player', 'matches_won', 'played_matches'));


	}

	public function completeMatch(Request $request) {

		$input = $request->all();

		//Get Players
		$player_1 = Player::where('id', $input['player_1_id'])->first();
		$player_2 = Player::where('id', $input['player_2_id'])->first();


		//Calculate player games
		$player_1_total_games = $input['player_1_set_1_games'] + $input['player_1_set_2_games'] + $input['player_1_set_3_games'];
		$player_2_total_games = $input['player_2_set_1_games'] + $input['player_2_set_2_games'] + $input['player_2_set_3_games'];
		
		//Add games to table
		$this->player_repository->addGamesToPlayers($player_1, $player_2, $player_1_total_games, $player_2_total_games);

		//Add sets and points to table, method will also return the winner
		$winning_player = $this->player_repository->addSetsAndPointsToPlayers($player_1, $player_2, $input['player_1_sets'], $input['player_2_sets']);


		//Create completed match record
		$match = new CompletedMatch;
		$match->player_1_id = $player_1->id;
		$match->player_2_id = $player_2->id;
		$match->winner = $winning_player;
		$match->save();


		return back()->with('message', 'Match Successfully Completed');
	}
}