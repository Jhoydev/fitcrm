@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row grid my-4">
                    @foreach($club->members as $member)
                        <div class="col-md-3 col-sm-6 grid-item mb-4">
                            <div class="card">
                                <a href="{{ url("members/$member->id") }}">
                                <img class="img-fluid img-thumbnail" src="{{ $member->Contact->avatar }}" alt="">
                                </a>
                                <div class="card-body">
                                    <h5>{{ $member->fullName() }}</h5>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-3">
                @include('layouts.sidebar')
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
