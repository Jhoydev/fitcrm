@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1><i class="fa fa-users"></i> Jueces FVFF</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($judges as $judge)
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ $judge->avatar }}" alt="">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $judge->fullName() }}</li>
                                    <li class="list-group-item">{{ $judge->birthdate }}</li>
                                    <li class="list-group-item">{{ $judge->email }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('my_script')

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        $('.grid').masonry();
    </script>
@endsection
