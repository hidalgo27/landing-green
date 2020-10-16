@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alumnos CEPRU | Gratis</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    {{ __('You are logged in!') }}--}}

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cod. CEPRU</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Grupo</th>
                                <th scope="col">Registro</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($alumno as $alumnos)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$alumnos->cepru}}</td>
                                <td>{{$alumnos->nombre}}</td>
                                <td>{{$alumnos->email}}</td>
                                <td>{{$alumnos->telefono}}</td>
                                <td>{{$alumnos->grupo}}</td>
                                <td>{{$alumnos->created_at}}</td>
                            </tr>
                            @php $i++ @endphp
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
