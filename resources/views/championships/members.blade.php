{{ dd($championship->categories) }}
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-12">
                <h3 class="text-center"><i class="fa fa-trophy text-warning"></i> {{ $championship->name }} <i class="ml-5 fa fa-calendar text-danger"></i> {{ $championship->date->toFormattedDateString() }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($championship->members as $member)
                        <tr>
                            <td>{{$member->fullName() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
