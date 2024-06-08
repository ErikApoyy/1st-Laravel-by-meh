@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 style="bold">Edit paper</h1>
    </div>
    
    <div class="container p-2">
        <form method = "POST" 
        action = "{{ url ('/submission/' . $submissions -> ID . '/edit') }}">
            @csrf
            @method('PUT')
            <div class="mb-3">                
                <p> Author: {{$submissions -> user -> Name}} </p>   
            </div>

            <div class="mb-3">
                <label for="Paper_type" class="form-label">Type of paper</label>
                <input type="text" class="form-control" id="Paper_type" name="Paper_type" 
                value = "{{$submissions -> Paper_type }}" required>
            </div>

            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" name="Title" 
                value = "{{$submissions -> Title }}" required>
            </div>

            <div class="mb-3">
                <label for="Abstract" class="form-label">Abstract</label>
                <input type="text" class="form-control" id="Abstract" name="Abstract" 
                value = "{{$submissions -> Abstract }}" required>
            </div>
            <button type="submit" class="btn btn-primary" name = "update" id="update">Update</button>
        </form>
    </div>

    @endsection