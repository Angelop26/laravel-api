@extends('layouts.admin')

@section('content')
    <h1> {{$project->title}} </h1>
    <div class="text-end">
        {{$project->slug}}
    </div>
    <p>{{$project->content}}</p>
@endsection