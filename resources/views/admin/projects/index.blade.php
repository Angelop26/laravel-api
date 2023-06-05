@extends('layouts.admin')

@section('content')
<h1>Lista Project</h1> 

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
            <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-succes">details</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection