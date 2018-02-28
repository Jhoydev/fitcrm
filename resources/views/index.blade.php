@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 d-flex justify-content-center mb-3">
                <img style="height: 50px" class="img-fluid" src="http://www.fvff.es/wp-content/uploads/2014/12/LogoSuelto.png" alt="">
                <h1 class="align-self-center">Atletas</h1>
            </div>
            <div class="col-10 offset-1 mb-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Nombre">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="category_id">Categoria</label>
                            {{ Form::select('category_id', $categories, null, ['class' => "form-control form-control-sm"]) }}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="club_id">Club</label>
                            {!! Form::select('club_id' , $clubs, null, ['class' => "form-control form-control-sm"]) !!}
                        </div>
                    </div>
                    <div class="form-row text-right">
                        <div class="form-group col-12 text-right">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="card-deck">
                    @foreach($members as $member)
                        <div class="col-md-4 col-lg-3 mb-3">
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
        </div>
    </div>
@endsection
