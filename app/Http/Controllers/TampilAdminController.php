<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\User;
use App\Models\userSetting;

class TampilAdminController extends Controller
{
    public function indexAdmin(){
        $data = userSetting::all();
        return view('admin.master', compact('data'));
    }
    public function dashboardAdmin(){
        $totalCourse    = course::count();
        $totalUser      = User::count();
        return view('admin.app.dashboard', compact('totalCourse','totalUser'));
    }
    public function indexUser(){
       return view('user.master');
    }

    
}
