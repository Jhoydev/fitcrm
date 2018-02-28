@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card card-default mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <span>Ultimos miembros</span>
                        <a href="{{ url('/members/create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo miembro</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Club</th>
                                <th scope="col">Categoria</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td>{{ $member->contact->id }}</td>
                                    <td>{{ $member->fullName() }}</td>
                                    <td>{{ $member->Club->name }}</td>
                                    <td>{{ $member->Category->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>Ultimos Contactos</span>
                        <a href="{{ url('/contacts/create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo contacto</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }} </td>
                                    <td>{{ $contact->fullName() }} </td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->telefono }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-muted text-right">
                        Total:100
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <img class="card-img-bottom" src="http://www.fvff.es/wp-content/uploads/2017/05/06052017-_DSC7329-1140x760.jpg" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="https://image.prntscr.com/image/hNSdmj8kSSSRfa5qfnxgEg.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 mb-3">
                        <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope" aria-hidden="true"></i> Enviar correo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
