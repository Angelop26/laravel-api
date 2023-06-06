@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
        @error('title')
        <div class="invalid-feedback">
            {{$message}}
        </div>
            
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">content</label>
        <textarea class="form-control" value="{{old('content')}}" id="content" name='content' rows="3" ></textarea>
    </div>
    <button type="submit" class="btn btn-success">invia</button>
</form>
    
@endsection