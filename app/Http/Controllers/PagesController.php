<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function moodleLoad(){
        return view('moodleLoad');
    }
    public function moodleDownload(){
        return view('moodleDownload');
    }
    public function asesoria(){
        return view('asesoria');
    }
    public function administrador(){
        return view('administrador');
    }
    public function perfiles(){
        //$tipoPerfil=App\Perfil::all();
        $tipoPerfil=App\Perfil::paginate(5);
        return view('perfiles',compact('tipoPerfil'));
    }

    public function crearPerfil(Request $request){
        //return $request->all();
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $perfilNuevo=new App\Perfil;
        $perfilNuevo->nombre=$request->nombre;
        $perfilNuevo->descripcion=$request->descripcion;

        $perfilNuevo->save();
        return back()->with('mensaje','Perfil Agregado');

    }

    public function editarPerfil($id){
        $tipoPerfil=App\Perfil::findOrFail($id);
        return view('profile.editarPerfil',compact('tipoPerfil'));
    }

    public function updatePerfil(Request $request,$id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $perfilUpdate=App\Perfil::findOrFail($id);
        $perfilUpdate->nombre=$request->nombre;
        $perfilUpdate->descripcion=$request->descripcion;

        $perfilUpdate->save();
        return back()->with('mensaje','Perfil Actualizado');
    }

    public function deletePerfil($id){
        $perfilDelete=App\Perfil::findOrFail($id);
        $perfilDelete->delete();
        return back()->with('mensaje','Nota Eliminada');
    }
}
