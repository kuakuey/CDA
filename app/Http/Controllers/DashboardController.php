<?php

namespace App\Http\Controllers;

use App\Models\tbeventos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function eventos(){
        $datos = tbeventos::orderBy('dateevento', 'desc')->get();

        return view('pages.sistema.eventos',compact('datos'));
    } 

    public function storeevent(Request $request){
        $nameimg = 'ev-'.$request->input('nombre').'-'.time().'.'.$request->imagen->getClientOriginalExtension();
        $request->imagen->move(public_path('img/eventos'), $nameimg);

        $evento = new tbeventos;
        $evento->nombreevento=$request->input('nombre');
        $evento->dateevento=$request->input('date');
        $evento->horaevento=$request->input('hora'); 
        $evento->imagen=$nameimg; 
        $evento->estado="1"; 

        $evento->save();


        // return redirect()->back()->with('success', 'Swal.fire("Gracias!");');
        return redirect()->route('dashboard-eventos')->with(['success' => 'Su sugerencia fue enviada con exito']);
    } 

    public function activeevent($id){
        $tbevento = tbeventos::find($id); // Encuentra el registro por su ID
        $tbevento->update([
            'estado' => '0',
        ]);
        return back();        
    }

    public function desevent($id){
        $tbevento = tbeventos::find($id); // Encuentra el registro por su ID
        $tbevento->update([
            'estado' => '1',
        ]);
        return back();        
    }

    public function eliminarev($id){
        $tbevento = tbeventos::find($id); // Encuentra el registro por su ID
        $tbevento->delete();
        return back();        
    }
}
