<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

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
        return back()->with('mensaje','Perfil Eliminado');
    }

    public function escalafon(){
        //$tipoEscalafon=App\Escalafon::all();
        $tipoEscalafon=App\Escalafon::paginate(10);
        return view('escalafon',compact('tipoEscalafon'));
    }

    public function crearEscalafon(Request $request){
        //return $request->all();
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'sueldo'=> 'required'
        ]);

        $escalafonNuevo=new App\Escalafon;
        $escalafonNuevo->nombre=$request->nombre;
        $escalafonNuevo->descripcion=$request->descripcion;
        $escalafonNuevo->sueldo=$request->sueldo;

        $escalafonNuevo->save();
        return back()->with('mensaje','Escalafón Agregado');

    }
    public function editarEscalafon($id){
        $tipoEscalafon=App\Escalafon::findOrFail($id);
        return view('profile.editarEscalafon',compact('tipoEscalafon'));
    }


    public function updateEscalafon(Request $request,$id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'sueldo'=> 'required'
        ]);

        $escalafonUpdate=App\Escalafon::findOrFail($id);
        $escalafonUpdate->nombre=$request->nombre;
        $escalafonUpdate->descripcion=$request->descripcion;
        $escalafonUpdate->sueldo=$request->sueldo;

        $escalafonUpdate->save();
        return back()->with('mensaje','Escalafón Actualizado');
    }

    public function deleteEscalafon($id){
        $escalafonDelete=App\Escalafon::findOrFail($id);
        $escalafonDelete->delete();
        return back()->with('mensaje','Escalafón Eliminado');
    }

    public function facultad(){
        $tipoFacultad=App\Facultad::all();
        //$tipoEscalafon=App\Escalafon::paginate(10);
        return view('facultad',compact('tipoFacultad'));
    }

    public function crearFacultad(Request $request){
        //return $request->all();
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $facultadNuevo=new App\Facultad;
        $facultadNuevo->nombre=$request->nombre;
        $facultadNuevo->descripcion=$request->descripcion;

        $facultadNuevo->save();
        return back()->with('mensaje','Facultad Agregada');

    }

    public function editarFacultad($id){
        $tipoFacultad=App\Facultad::findOrFail($id);
        return view('profile.editarFacultad',compact('tipoFacultad'));
    }

    public function updateFacultad(Request $request,$id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $facultadUpdate=App\Facultad::findOrFail($id);
        $facultadUpdate->nombre=$request->nombre;
        $facultadUpdate->descripcion=$request->descripcion;

        $facultadUpdate->save();
        return back()->with('mensaje','Facultad Actualizada');
    }

    public function deleteFacultad($id){
        $facultadDelete=App\Facultad::findOrFail($id);
        $facultadDelete->delete();
        return back()->with('mensaje','Facultad Eliminada');
    }

    public function usuarios(){
        $tipoUsuario=App\User::all();
        $tipoPerfil=App\Perfil::all();
        $tipoEscalafon=App\Escalafon::all();
        //$user=App\Perfil::paginate(5);
        return view('usuarios',compact('tipoUsuario','tipoPerfil','tipoEscalafon'));
    }

    public function editarUsuarios($id){
        $tipoUsuario=App\User::findOrFail($id);
        $tipoPerfil=App\Perfil::all();
        $tipoEscalafon=App\Escalafon::all();
        return view('profile.editarUsuarios',compact('tipoUsuario','tipoPerfil','tipoEscalafon'));
    }
}
