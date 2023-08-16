<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\userSetting;
use App\Models\User;
use Auth;
class settingProfileController extends Controller
{
    public function indexSetting(){
        $data = Auth::user(); 
        return view('settingProfile.setting',compact('data'));
    }

    public function tampilSetting(){
        $datas = userSetting::all();
        return view('settingProfile.tampilSetting', compact('datas'));
    }

    public function insertSettingProfile(Request $request)
    {
        $data = userSetting::where('id_user', $request->user()->id)->first();

        if (!$data) {
            $data = new userSetting();
            $data->id_user = $request->user()->id;
        }

            $data->bio = $request->bio;
            $data->alamat = $request->alamat;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->pengalaman_kerja = $request->pengalaman_kerja;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_profile/', $gambarName);
            $data->gambar = $gambarName;
        }

        $data->save();
        // dd($data);
        Alert::success('Data berhasil disimpan!');
        return redirect()->route('tampilAdminSetting');
    }



}
