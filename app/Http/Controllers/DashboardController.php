<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Player;
use App\Models\User;
use App\Models\CompletedMatch;
use App\Models\Fixture;
use App\Repositories\PlayerRepository;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller {

	public function __construct(
        PlayerRepository $player_repository
        
    ) {
        $this->player_repository = $player_repository;
      
    }


	public function showDashboard(Request $request) {

		$players = User::get();
		$fixtures = Fixture::get();

		return view('dashboard', compact('players', 'fixtures'));
	}

	public function createPlayer(Request $request) {
		$input = $request->all();
		$hashed_password = Hash::make($input['password']);
		
		$user = User::create([
			'name' => $input['name'],
			'email' => $input['email'],
			'password' => $hashed_password

		]);

		return back()->with('message', 'Player Successfully Added');
	}

	public function editPlayer(Request $request) {
		$input = $request->all();
		$player = User::where('id', $input['player_id'])->first();
		

		$player->name = $input['name'];
		$player->email = $input['email'];
		$player->save();

		return back()->with('message', 'Player Details Successfully Updated');

	}

	public function playerDetails(Request $request) {

		$player = User::where('id', $request->id)->first();
		
		$played_matches = CompletedMatch::where('player_1_id', $player->id)->orWhere('player_2_id', $player->id)->get();
		$matches_won = CompletedMatch::where('winner', $player->id)->get();

		return view('pages.player', compact('player', 'matches_won', 'played_matches'));


	}

	public function createFixture(Request $request) {

		$input = $request->all();

		//Create new instance of a fixture
		$fixture = new Fixture;
		$fixture->player_1_id = $input['player_1_id'];
		$fixture->player_2_id = $input['player_2_id'];
		$fixture->completion_date = $input['completion_date'];
		$fixture->save();

		return back()->with('message', 'New Fixture Added');

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