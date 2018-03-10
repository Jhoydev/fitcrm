
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row mb-3 text-center">
                    <div class="col-12 d-flex justify-content-center mb-3 ">
                        <h1 class="align-self-center"><img style="height: 50px" class="img-fluid" src="http://www.fvff.es/wp-content/uploads/2014/12/LogoSuelto.png" alt=""> Federación Valenciana de Fisiculturismo/Fitness</h1>

                    </div>
                    <div class="col-12 text-center">
                        <hr>
                        <h2>Atletas</h2>
                    </div>
                    <div class="col-10 offset-1 my-4">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">Nombre</label>

                                    <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Nombre" value="{{ request()->input('name') }}">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="category_id">Categoria</label>
                                    <select class="form-control form-control-sm" name="category_id">
                                        <option value=""></option>
                                        @foreach($categories as $item)
                                            @if (request()->input('category_id') == $item->id)
                                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="club_id">Club</label>
                                    <select class="form-control form-control-sm" name="club_id">
                                        <option value=""></option>
                                        @foreach($clubs as $item)
                                            @if (request()->input('club_id') == $item->id)
                                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row text-right">
                                <div class="form-group col-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                                </div>
                            </div>
                        </form>
                        @if (request()->input('name') || request()->input('category_id') || request()->input('club_id'))
                                <span>Has buscado por:</span>
                            @if(request()->input('name'))
                                <span class="badge badge-info">{{ request()->input('name') }}</span>
                            @endif
                            @if(request()->input('category_id'))
                                <span class="badge badge-info"> {{ $categories->firstWhere('id',request()->input('category_id'))->name }}</span>
                            @endif
                            @if(request()->input('club_id'))
                                <span class="badge badge-info">{{ $clubs->firstWhere('id',request()->input('club_id'))->name }}</span>
                            @endif
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="card-deck">
                            @foreach($members as $member)
                                <div class="col-md-4 col-lg-4 mb-3">
                                    <div class="card">
                                        <a href="{{ url("members/$member->id") }}">
                                            <img class="card-img-top" src="{{ $member->Contact->avatar }}" alt="Card image cap">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $member->Contact->name }}</h5>
                                            <p class="card-text text-center">{{ $member->Category->name }}</p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between">
                                            <span class="text-muted">Club</span>
                                            <span class="">{{ $member->Club->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        {{ $members->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
