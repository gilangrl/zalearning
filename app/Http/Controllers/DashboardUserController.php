<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\videoMateri;
class DashboardUserController extends Controller
{
    public function indexDashboardUser(){
        $data = course::all();
        $datas = videoMateri::all();
        return view('user.main.dashboard', compact('data','datas'));
    }

    public function showDashboard($id){
        $data = course::findOrFail($id);
        $datas = videoMateri::all();

        return view('user.main.course',compact('data','datas'));
    }
}
