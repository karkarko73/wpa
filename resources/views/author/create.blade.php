@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('authors.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Author Name:</label>
                    <input name="name" class="form-control" type="text">
                    @error('name')
                    <small id="authorName" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
