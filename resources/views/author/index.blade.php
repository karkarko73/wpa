@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <a class="btn btn-primary" href="{{ route('authors.create') }}">Create Author</a>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                     <th>ID</th>
                     <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                         <tr>
                             <td>{{ $author->id }}</td>
                             <td>{{ $author->name }}</td>
                         </tr>
                    @endforeach
                </tbody>
            </table>
         {{ $authors->links() }}
        </div>
    </div>
</div>



@endsection
