@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="card-deck">
                    @foreach($clubs as $club)
                        <div class="col-md-3 col-sm-4 my-2">
                            <div class="card">
                                <a href="{{ url("clubs/$club->id") }}">
                                    <img class="card-img-top" src="http://www.fvff.es/wp-content/uploads/2017/02/logo-EMPRO-TEAM.jpg" alt="Card image cap">
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="px-3 card-title text-center">{{ $club->name }}</h5>
                                    <ul class="list-group list-group-flush" style="font-size: 0.8em">
                                        <li class="list-group-item">{{ $club->phone }}</li>
                                        <li class="list-group-item">{{ $club->mobile }}</li>
                                        <li class="list-group-item">{{ $club->address }}</li>
                                        <li class="list-group-item">Web: <a target="_blank" href="{{ $club->web }}"><span class="fa fa-globe"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $clubs->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @include('layouts.sidebar')
            </div>
        </div>
    </div>

@endsection