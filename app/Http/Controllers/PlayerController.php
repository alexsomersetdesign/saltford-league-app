<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Player;

class PlayerController extends Controller {

	public function createPlayer(Request $request) {

		$input = $request->all();
		
		$player = Player::create([
			'first_name' => $input['first_name'],
			'second_name' => $input['second_name'],
		]);

		return back()->with('message', 'Player Successfully Added');
	}
}