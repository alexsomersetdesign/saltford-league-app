<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\CompletedMatch;
use App\Repositories\PlayerRepository;

class GuestController extends Controller {

	public function __construct(
        PlayerRepository $player_repository
        
    ) {
        $this->player_repository = $player_repository;
      
    }



	public function showLeaderboard(Request $request) {

		$ordered_players = User::orderByDesc('points')->get();

		return view('pages.guest-leaderboard', compact('ordered_players'));
	}


}