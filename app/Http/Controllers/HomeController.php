<?php

namespace App\Http\Controllers;

use App\Models\tbeventos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $eventocercano = Tbeventos::where('estado', '1')
        ->orderBy('dateevento', 'asc')
        ->first();

        return view('pages.landing.home', compact('eventocercano'));
    } 
    public function who(){
        return view('pages.landing.quienes-somos');
    } 
    public function eventos(){
        $eventos = Tbeventos::where('estado','1')
        ->orderBy('dateevento', 'desc')
        ->get();
        return view('pages.landing.eventos', compact('eventos'));
    } 
}
