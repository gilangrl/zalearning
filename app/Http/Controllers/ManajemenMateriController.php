<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class ManajemenMateriController extends Controller
{
    public function index(){
        $data = course::all();
        return view('admin.app.manajemen_materi');
    }

    public function searchMateri(Request $request)
    {
        $searchJudul = $request->input('search');
        $data = [];

        if (!empty($searchJudul)) {
            // Lakukan pencarian berdasarkan judul
            $data = course::where('judul', 'LIKE', '%' . $searchJudul . '%')->get();
        }
        return view('admin.app.manajemen_materi', compact('data','searchJudul'));
    }
}
