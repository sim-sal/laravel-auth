@extends('layouts.app')

@section('content')

    <div class="container text-center pt-5">
        <h1>PROJECT LIST</h1>

        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li class="pt-2">
                    <strong>{{$project -> name}}</strong>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
