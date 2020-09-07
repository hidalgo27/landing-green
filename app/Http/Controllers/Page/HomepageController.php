<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\TAlumno;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('page.home');
    }

    public function agosto_2020(){
        return view('page.agosto-home');
    }

    public function form_free(Request $request){

        $validatedData = $request->validate([
            'email' => 'required|unique:talumnos',
        ]);

        $alumnos = new TAlumno();
        $alumnos->nombre = $request->input('name');
        $alumnos->email = $request->input('email');
        $alumnos->telefono = $request->input('cel');
        $alumnos->evento = 'septiembre';
        $alumnos->grupo = $request->input('grupo');
        $alumnos->estado = '1';
        $alumnos->save();

        return redirect(route('agosto_2020_path'))->with('status', 'Registro satisfactorio.');

//        return view('page.home')->with('status', 'Successfully updated video');;
    }

    public function suscipcion(Request $request){

        $alumnos = new TAlumno();
        $alumnos->email = $request->input('email');
        $alumnos->evento = 'suscripcion';
        $alumnos->estado = '1';
        $alumnos->save();

        return redirect(route('home_path'))->with('suscripcion', 'Gracias por su suscripción.');

//        return view('page.home')->with('status', 'Successfully updated video');;
    }


    public function list_group(){
        $alumno = TAlumno::where('evento', 'septiembre')->get();
        return view('page.list-group', compact('alumno'));
    }

    public function ecuesta_set(){
        return view('page.encuesta-1');
    }
}
