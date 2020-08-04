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
    public function form_free(Request $request){

        $validatedData = $request->validate([
            'email' => 'required|unique:talumnos',
        ]);

        $alumnos = new TAlumno();
        $alumnos->nombre = $request->input('name');
        $alumnos->email = $request->input('email');
        $alumnos->telefono = $request->input('cel');
        $alumnos->evento = '03 agosto gratis';
        $alumnos->grupo = $request->input('grupo');
        $alumnos->estado = '1';
        $alumnos->save();

        return redirect(route('home_path'))->with('status', 'Registro satisfactorio.');

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
        $alumno = TAlumno::all();
        return view('page.list-group', compact('alumno'));
    }

}
