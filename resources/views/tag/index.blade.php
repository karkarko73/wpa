@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <a class="btn btn-primary" href="{{ route('tags.create') }}">Create Tag</a>
            <hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                     <th>ID</th>
                     <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                         <tr>
                             <td>{{ $tag->id }}</td>
                             <td>{{ $tag->name }}</td>
                         </tr>
                    @endforeach
                </tbody>
            </table>
         {{ $tags->links() }}
        </div>
    </div>
</div>



@endsection
