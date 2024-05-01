<?php

namespace App\Http\Controllers;

use App\Models\tbusuarios;
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
        $user = $request->input('user');
        $password = $request->input('password');

        $login = new tbusuarios;
        $login = tbusuarios::where('user', $user)->first();

        $nombreUsuario = $login->nombre;

        if ($login) {
            // Usuario encontrado, ahora puedes verificar la contraseña
            if ($password === $login->password) {
                return redirect()->route('iniciar')->with(['success' => 'Bienvenido '.$nombreUsuario])->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');



            } else {
                return back()->withErrors(['msgerror' => 'Contraseña incorrecta']);
            }
        } else {
            return back()->withErrors(['msgerror' => 'Usuario incorrecta']);
        }
        

        

    }
}
