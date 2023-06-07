@extends('layouts.admin')

@section('content')
    <h1> {{$project->title}} </h1>
    <div class="text-end">
        {{$project->slug}}
    </div>
    <p>{{$project->content}}</p>
    <p>tipo progetto:{{$project->type?->name}}</p>
@endsection