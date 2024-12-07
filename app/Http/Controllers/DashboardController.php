<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Player;

class DashboardController extends Controller {

	public function showDashboard(Request $request) {

		$players = Player::get();
		$leaderboard = $players->sortBy('points');

		
		return view('dashboard', compact('players', 'leaderboard'));
	}
}