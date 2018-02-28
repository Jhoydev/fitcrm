@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1><i class="fa fa-trophy text-warning"></i> Campeonatos</h1>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-sm btn-success" href="{{ url('championships/create') }}">Nuevo campeonato</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Perfil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($championships as $championship)
                                <tr>
                                    <th scope="row">{{ $championship->id }}</th>
                                    <td>{{ $championship->name }}</td>
                                    <td>{{ $championship->date }}</td>
                                    <td><a href="{{ url("/championships/$championship->id") }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
