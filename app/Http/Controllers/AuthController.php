<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return to_route('login');
    }

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credentials=[
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        if (Auth::attempt($credentials))
        {
            return redirect('/home');
        }
        return back()->with('erreur','Email ou mot de passe incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function profile()
    {
        $attrib=User::all();
        return view('profile',['liste'=>$attrib]);
    }
}
