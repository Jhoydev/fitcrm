@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="">
            <div class="row mb-3">
                <div class="col-12 text-right">
                    <a href="{{ url("/members/$member->id/edit") }}" class="btn btn-success btn-sm">
                        Guardar
                    </a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-9 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center mb-3">
                                    <img style="max-height: 350px" class="img-fluid img-thumbnail"
                                         src="http://blog.emiliomartinez.com/wp-content/uploads/2014/11/2014-10-05-09.42.08.jpg" alt="">
                                </div>
                                <div class="col-md-9">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nombre</label>
                                            <input id="name" class="form-control form-control-sm" type="text" value="{{ $member->name }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="last_name">Apellido</label>
                                            <input id="last_name" class="form-control form-control-sm" type="text" value="{{ $member->last_name }}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="birthdate">Fecha de nacimiento</label>
                                            <input id="birthdate" class="form-control form-control-sm" type="date" value="{{ $member->birthdate }}">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="category_id">Categoria</label>
                                            {{ Form::select('category_id', $categories, null, ['class' => "form-control form-control-sm"]) }}
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="club_id">Club</label>
                                            {{ Form::select('club_id', $clubs, null, ['class' => "form-control form-control-sm"]) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-around">
                                            <div>
                                                <a href="{{ $member->facebook }}" data-toggle="modal" data-target="#enlace_facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{ $member->twitter }}" data-toggle="modal" data-target="#enlace_twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{ $member->instagram }}" data-toggle="modal" data-target="#enlace_twitter">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-12 ">
                                            <strong>Galeria de fotos</strong>
                                        </div>
                                        <div class="col-12">
                                            <img class="img-fluid img-thumbnail" style="max-height: 150px"
                                                 src="http://blog.emiliomartinez.com/wp-content/uploads/2014/11/ESP_5285.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @if ($member->Curriculum)
            <div class="row">
                <div class="col-12">
                    <h3>Curriculum</h3>
                    @foreach($member->Curriculum as $description)
                        <div class="card mb-2">
                            <div class="card-header d-flex justify-content-between">
                                <div>{{ $description->year }}</div>
                            </div>
                            <div class="card-body">
                                <textarea name="year" id="year" class="form-control">{{ $description->text }}</textarea>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            @if ($member->Academy)
                <div class="row">
                    <div class="col-12">
                        <h3>Curriculum Academico</h3>
                        @foreach($member->Academy as $description)
                            <div class="card mb-2">
                                <div class="card-header d-flex justify-content-between">
                                    <div>{{ $description->year }}</div>
                                </div>
                                <div class="card-body">
                                    <textarea name="year" id="year" class="form-control">{{ $description->text }}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </form>
    </div>
    @include('members.modal.edit')
@endsection
