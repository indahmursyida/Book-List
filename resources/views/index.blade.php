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
            <ol class=" mt-4 my-4 list-group list-group-numbered">
                @foreach($books as $book)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{$book->title}}</div>
                        {{$book->author}}
                    </div>

                    <a href="/book/{{$book->id}}" class="badge bg-info">detail</a>
                </li>

                @endforeach
            </ol>


        </div>
    </div>
</div>
@endsection