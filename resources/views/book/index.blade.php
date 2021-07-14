@extends('layout.main')
@section('title', 'Book List')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4 my-4 text-center">Book List</h1>
            <figure class="text-end">
                <blockquote class="blockquote">
                    <p>“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Dr. Seuss, <cite title="Source Title">I Can Read With My Eyes Shut!</cite>
                </figcaption>
            </figure>
            <a href="/book/create" class="btn btn-primary my-3">Add book</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <a href="/book/{{$book->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/book/{{$book->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection