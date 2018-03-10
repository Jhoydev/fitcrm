@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row mb-3 d-none">
                    <div class="col-12 text-right">
                        <a href="{{ url("/members/$member->id/edit") }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i>
                            Editar</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12  d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 text-center mb-3">
                                        <img style="max-height: 350px" class="img-fluid img-thumbnail"
                                             src="{{ $member->Contact->avatar }}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h2>{{ $member->fullName() }}</h2>
                                        <p><strong>Categoria:</strong> {{ $member->Category->name }}</p>
                                        <p><strong>Fecha de nacimiento:</strong> {{ $member->Contact->birthdate }}</p>
                                        <p><strong>Club:</strong> {{ $member->Club->name }}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-around" style="font-size: 2em">
                                        <div>
                                            <a class="text-info" href="{{ $member->Contact->facebook }}" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{ $member->Contact->twitter }}" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="text-danger" href="{{ $member->Contact->instagram }}" target="_blank">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <h5><i class="fa fa-trophy text-warning" aria-hidden="true"></i> Campeonatos federados</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @for ($i = 0; $i < $member->championships->count() && $i < 3; $i++)
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <div class="card-text">
                                            <a href="#">
                                                <ul class="list-group list-group-flush" style="font-size: 12px">
                                                    <li class="list-group-item">{{ $member->championships[$i]->name }}</li>
                                                    <li class="list-group-item">{{ $member->championships[$i]->date->toFormattedDateString() }}</li>
                                                    <li class="list-group-item">Pos: {{ $member->championships[$i]->pivot->place }}</li>
                                                    <li class="list-group-item">Pts: {{ $member->championships[$i]->pivot->score }}</li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            @if($member->championships->count() >= 3)
                                <div class="col-md-3 d-flex justify-content-strech mb-3">
                                    <div class="card w-100 d-flex justify-content-center">
                                        <div class="card-text">
                                            <h5 class="text-center">Ver más <i class="fa fa-plus" aria-hidden="true"></i></h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-10">
                        <h5><i class="fa fa-trophy" aria-hidden="true"></i> Campeonatos amateur<a href="#" class="btn btn-info btn-sm d-none"><i class="fa fa-plus" aria-hidden="true"></i></a></h5>
                    </div>
                    @if ($member->Curriculum)
                        <div class="col-12">
                            @foreach($member->Curriculum as $description)
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>{{ $description->year }}</div>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {!! $description->text !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="row my-4">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-10">
                                <h5><i class="fa fa-glass" aria-hidden="true"></i> Curriculum academico <a href="#" class="btn btn-info btn-sm d-none"><i class="fa fa-plus"></i></a></h5>
                            </div>
                        </div>
                        @if ($member->Academy)
                            @foreach($member->Academy as $description)
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>{{ $description->year }}</div>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {!! $description->text !!}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-4">
                        <h4><i class="fa fa-building" aria-hidden="true"></i> {{ $member->Club->name }}</h4>
                        <img class="img-fluid" src="{{ $member->Contact->instagram }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @include('layouts.sidebar')
            </div>
        </div>

    </div>
@endsection
