<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentUserController extends Controller
{
    public function indexPaymentUser(){
        return view('user.main.payment');
    }
}
