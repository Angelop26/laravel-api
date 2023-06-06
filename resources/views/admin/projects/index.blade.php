@extends('layouts.admin')

@section('content')
@include('partials.session_message')

<h1>Lista Project</h1> 
<a href="{{route('admin.projects.create')}}" class="btn btn-success ">create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">slug</th>
        <th scope="col">content</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)            
        <tr>
          <th scope="row"> {{$project->id}} </th>
          <td> {{$project->title}} </td>
          <td> {{$project->slug}} </td>
          <td> {{$project->content}} </td>
          <td>
            <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-success">details</a>
            <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-warning">edit</a>
            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">del</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection