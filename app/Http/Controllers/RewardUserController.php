<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RewardUserController extends Controller
{
    public function indexReward(){
        return view('user.main.reward');
    }
}
