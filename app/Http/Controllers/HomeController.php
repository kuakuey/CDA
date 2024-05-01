<?php

namespace App\Http\Controllers;

use App\Models\tbeventos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('pages.landing.home');
    } 
    public function who(){
        return view('pages.landing.quienes-somos');
    } 
    public function eventos(){
        $eventos = Tbeventos::where('estado','1')->get();
        return view('pages.landing.eventos', compact('eventos'));
    } 
}
