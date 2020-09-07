<?php

namespace App\Http\Controllers;

use App\TAlumno;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $alumno = TAlumno::where('evento', 'septiembre')->get();

        return view('home', compact('alumno'));
    }

}
