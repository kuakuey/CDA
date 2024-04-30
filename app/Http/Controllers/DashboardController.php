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
        $queja = new tbeventos;
        $queja->nombreevento=$request->input('nombre');
        $queja->dateevento=$request->input('date');
        $queja->horaevento=$request->input('hora'); 
        $queja->estado="0"; 

        $queja->save();


        // return redirect()->back()->with('success', 'Swal.fire("Gracias!");');
        return redirect()->route('eventos')->with(['success' => 'Su sugerencia fue enviada con exito']);
    } 

    public function activeevent($id){
        $tbevento = tbeventos::find($id); // Encuentra el registro por su ID
        $tbevento->update([
            'estado' => '1',
        ]);
        return back();        
    }

    public function desevent($id){
        $tbevento = tbeventos::find($id); // Encuentra el registro por su ID
        $tbevento->update([
            'estado' => '0',
        ]);
        return back();        
    }

    public function eliminarev($id){
        $tbevento = tbeventos::find($id); // Encuentra el registro por su ID
        $tbevento->delete();
        return back();        
    }
}
