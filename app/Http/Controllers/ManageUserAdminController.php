<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ManageUserAdminController extends Controller
{
    public function indexKelolaUser(){
        $data   = User::paginate(3);
        $judul  = 'Delete User!';
        $isi    = "Apakah anda yakin?";
        confirmDelete($judul, $isi);
        return view('admin.app.kelolaUser_admin',compact('data'));
    }

    public function deleteKelolaUser($id)
    {   

        $data = User::findOrFail($id);
        $data->delete();
        // dd($data);
        return redirect()->route('indexKelolaUser');
    }
}
