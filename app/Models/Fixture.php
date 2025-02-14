<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Fixture extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    	'id',
        'player_1_id',
        'player_2_id',
        'completed_date',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    public function getPlayerOne() {
        return $this->belongsTo(User::class, 'player_1_id');
    }
    
    public function getPlayerTwo() {
        return $this->belongsTo(User::class, 'player_2_id');
    }

    public function getOpponent() {

        //Get auth user
        $auth_user = Auth::user()->id;

        //Check to see if the auth user id matches that of player 1, if it does then return the user where id matches player 2 else return player 1
        if($this->player_1_id === $auth_user) {
            return $this->belongsTo(User::class, 'player_2_id');
        } else {
             return $this->belongsTo(User::class, 'player_1_id');
        }
    }
    
}
