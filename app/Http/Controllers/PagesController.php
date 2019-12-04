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

    public function roles(){
        $tipoRoles=App\rols::all();

        return view('roles',compact('tipoRoles'));
    }

    public function crearRol(Request $request){

        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $rolNuevo=new App\rols;
        $rolNuevo->nombre=$request->nombre;
        $rolNuevo->descripcion=$request->descripcion;

        $rolNuevo->save();
        return back()->with('mensaje','Rol Agregado');

    }

    public function editarRol($id){
        $tipoRoles=App\rols::findOrFail($id);
        return view('profile.editarRol',compact('tipoRoles'));
    }

    public function updateRol(Request $request,$id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $rolUpdate=App\rols::findOrFail($id);
        $rolUpdate->nombre=$request->nombre;
        $rolUpdate->descripcion=$request->descripcion;

        $rolUpdate->save();
        return back()->with('mensaje','Rol Actualizado');
    }

    public function deleteRol($id){
        $rolDelete=App\rols::findOrFail($id);
        $rolDelete->delete();
        return back()->with('mensaje','Rol Eliminado');
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
        //$tipoFacultad=App\Facultad::all();
        $tipoFacultad=App\Facultad::paginate(10);
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

    public function departamento(){
        $tipoFacultad=App\Facultad::all();
        $tipoDepartamento=App\Departamento::all();

        return view('departamento',compact('tipoFacultad','tipoDepartamento'));
    }

    public function crearDepartamento(Request $request){
        //return $request->all();
        $request->validate([
            'nombre'=> 'required',
            'facultad_id'=> 'required'
        ]);

        $departamentoNuevo=new App\Departamento;
        $departamentoNuevo->nombre=$request->nombre;
        $departamentoNuevo->facultad_id=$request->facultad_id;

        $departamentoNuevo->save();
        return back()->with('mensaje','Departamento Agregado');

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


    public function planificacionModulo(){
        $tipoModulo=App\moduloCapacitacion::all();
        return view('planificacionModulo',compact('tipoModulo'));
    }

    public function crearModulo(Request $request){
        //return $request->all();
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $moduloNuevo=new App\moduloCapacitacion;
        $moduloNuevo->nombre=$request->nombre;
        $moduloNuevo->descripcion=$request->descripcion;

        $moduloNuevo->save();
        return back()->with('mensaje','Módulo Agregado');

    }

    public function deleteModulo($id){
        $moduloDelete=App\moduloCapacitacion::findOrFail($id);
        $moduloDelete->delete();
        return back()->with('mensaje','Modulo Eliminado');
    }

    public function editarModulo($id){
        $tipoModulo=App\moduloCapacitacion::findOrFail($id);
        return view('profile.editarModulo',compact('tipoModulo'));
    }

    public function updateModulo(Request $request,$id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required'
        ]);

        $moduloUpdate=App\moduloCapacitacion::findOrFail($id);
        $moduloUpdate->nombre=$request->nombre;
        $moduloUpdate->descripcion=$request->descripcion;

        $moduloUpdate->save();
        return back()->with('mensaje','Módulo Actualizado');
    }

    public function planificacionCapacitacion(){
        $tipoPlanCapacitacion=App\PlanCapacitacion::all();
        return view('planificacionCapacitacion',compact('tipoPlanCapacitacion'));
    }

    public function crearPlanCapacitacion(Request $request){
        //return $request->all();
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'fechaInicio'=> 'required',
            'fechaTermino'=> 'required',
            'cantidadSCT'=> 'required'
        ]);

        $planCapacitacionNuevo=new App\PlanCapacitacion;
        $planCapacitacionNuevo->nombre=$request->nombre;
        $planCapacitacionNuevo->descripcion=$request->descripcion;
        $planCapacitacionNuevo->fechaInicio=$request->fechaInicio;
        $planCapacitacionNuevo->fechaTermino=$request->fechaTermino;
        $planCapacitacionNuevo->cantidadSCT=$request->cantidadSCT;

        $planCapacitacionNuevo->save();
        return back()->with('mensaje','Plan de Capacitación Agregado');

    }

    public function editarPlanCapacitacion($id){
        $tipoPlanCapacitacion=App\PlanCapacitacion::findOrFail($id);
        return view('profile.editarPlanCapacitacion',compact('tipoPlanCapacitacion'));
    }

    public function updatePlanCapacitacion(Request $request,$id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'fechaInicio'=> 'required',
            'fechaTermino'=> 'required',
            'cantidadSCT'=> 'required'
        ]);

        $planCapacitacionUpdate=App\PlanCapacitacion::findOrFail($id);
        $planCapacitacionUpdate->nombre=$request->nombre;
        $planCapacitacionUpdate->descripcion=$request->descripcion;
        $planCapacitacionUpdate->fechaInicio=$request->fechaInicio;
        $planCapacitacionUpdate->fechaTermino=$request->fechaTermino;
        $planCapacitacionUpdate->cantidadSCT=$request->cantidadSCT;


        $planCapacitacionUpdate->save();
        return back()->with('mensaje','Plan de Capacitación Actualizado');
    }

    public function deletePlanCapacitacion($id){
        $planCapacitacionDelete=App\PlanCapacitacion::findOrFail($id);
        $planCapacitacionDelete->delete();
        return back()->with('mensaje','Plan de Capacitación Eliminado');
    }
}
