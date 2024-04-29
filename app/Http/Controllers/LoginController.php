<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(){
        return view('pages.login');
    }
    public function iniciar(){
        return view('pages.dashboard');
    }
    public function store(Request $request){
        $user1 = $request->input('user');
        $password1 = $request->input('password');

        return redirect()->route('iniciar')->with(['success' => 'Bienvenido '.$user1]);
    }
}
