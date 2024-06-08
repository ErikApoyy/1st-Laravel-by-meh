@extends('layouts.app')
@section('content')
<div class="container">
            <h1>Submit a new paper</h1>
        </div>
        
        
        <div class="container p-2">
            <form method="POST" id="submissionForm" 
            action="{{ url('/submission/create') }}" class="form-col col-md-12">
            @csrf
            
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" autocomplete="author">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" autocomplete="type">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" autocomplete="title">
            </div>

            <div class="mb-3">
                <label for="abstract" class="form-label">Abstract</label>
                <input type="text" class="form-control" id="abstract" name="abstract" autocomplete="abstract">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" autocomplete="location">
            </div>

                <button type="submit" class="btn btn-primary NextButton" name="submit">Submit</button>
                <button type="button" class="btn btn-secondary" name="cancel">Cancel</button>
            </form>  
            

        </div>

@endsection