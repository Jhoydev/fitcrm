@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>Miembros</h1>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="mr-3" href="{{ url()->previous() }}"><i class="fas fa-arrow-alt-circle-left"></i></a>
                        <a class="btn btn-sm btn-success" href="{{ url('members/create') }}">Nuevo miembro</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Club</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Perfil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                            <tr>
                                <th scope="row">{{ $member->id }}</th>
                                <td>{{ $member->name }} {{ $member->last_name }}</td>
                                <td>{{ $member->Club->name }}</td>
                                <td>{{ $member->Category->name }}</td>
                                <td><a href="{{ url("/members/$member->id") }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a></td>
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
