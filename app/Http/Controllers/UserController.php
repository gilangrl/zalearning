<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ],
        [
            'email.required' =>'Email Wajib Diisi',
            'password.required' =>'Password Wajib Diisi',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infoLogin))
        {
            if(Auth::user()->role == 'operator'){
                return redirect('/admin/operator');

            }else if(Auth::user()->role == 'user'){
                return redirect('/admin/user');
            }

        }else{
            return redirect('/')->withErrors('username dan password tidak sesuai')->withInput();
        }
    }

    public function Indexregister()
    {
        return view('auth.register');
    }

    public function FromRegister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], 
        [
            'email.unique' => 'Email telah terdaftar.',
            'password.min' => 'Kata sandi harus minimal 6 karakter.',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        // dd($data);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
