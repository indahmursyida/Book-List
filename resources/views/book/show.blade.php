@extends('layout.main')
@section('title', 'Book List')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4 my-4 text-center">Book Detail</h1>
            <figure class=" text-end">
                <blockquote class="blockquote">
                    <p>“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Dr. Seuss, <cite title="Source Title">I Can Read With My Eyes Shut!</cite>
                </figcaption>
            </figure>
            <div class="card border-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$book->author}}</h6>
                    
                    <p class="card-text">{{$book->description}}</p>
                    <p class="card-text">Rp. {{$book->price}}</p>


                    <a href="/" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection