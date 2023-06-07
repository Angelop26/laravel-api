@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title)}}">
    </div>

    <div class="mb-3">
        <label for="type">type</label>
        <select class="form-select" aria-label="Default select example" id="type" name="type_id" >
            
            <option value=""></option>
            @foreach ($types as $type)
                <option @selected($type->id == old('type_id',$project->$type?->id))  value="{{$type->id}}"> {{$type->name}} </option>
            @endforeach
            
        </select>
    </div>
    
    <div class="mb-3">
        <label for="content" class="form-label">content</label>
        <textarea class="form-control" value="{{old('content', $project->content)}}" id="content" name='content' rows="3" ></textarea>
    </div>
    <button type="submit" class="btn btn-success">invia</button>
</form>
@endsection