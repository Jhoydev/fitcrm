@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <h3 class="text-center"><i class="fa fa-trophy text-warning"></i> {{ $championship->name }} <i
                            class="ml-5 fa fa-calendar text-danger"></i> {{ $championship->date->toFormattedDateString() }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <div class="row">
                    @foreach($list_members as $list_item)
                        <div class="col-md-3">
                            <table class="table table-hover table-bordered table-sm my-4">
                                <tbody>
                                <tr class="bg-secondary text-white">
                                    <th  class="text-center" colspan="3">{{ $list_item[0]->category->name }}</th>
                                </tr>
                                <tr class="bg-light">
                                    <td>#</td>
                                    <td>Nombre</td>
                                    <td>Score.</td>
                                </tr>
                                @foreach($list_item as $item)
                                    <tr>
                                        <td>{{ $item->findChampionship($item->pivot->championship_id,$item->id)->first()->pivot->place }}</td>
                                        <td><a href="{{ url("/members/$item->id") }}">{{ $item->contact->name }}</a></td>
                                        <td>{{ $item->findChampionship($item->pivot->championship_id,$item->id)->first()->pivot->score }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
