<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Player;
use App\Models\Fixture;
use App\Repositories\PlayerRepository;

class PlayerDashboardController extends Controller {

	public function __construct(
        PlayerRepository $player_repository
        
    ) {
        $this->player_repository = $player_repository;
      
    }


	public function showPlayerDashboard(Request $request) {

        $player = Auth::user();
        
        $fixtures = Fixture::where('player_1_id', $player->id)->orWhere('player_2_id', $player->id)->get();
		

		return view('player-dashboard', compact('fixtures'));
	}

}