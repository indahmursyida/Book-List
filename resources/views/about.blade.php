@extends('layout.main')
@section('title', 'Foodies')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4 my-4 text-center">About This Website</h1>
            <figure class="text-end">
                <blockquote class="blockquote">
                    <p>“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Dr. Seuss, <cite title="Source Title">I Can Read With My Eyes Shut!</cite>
                </figcaption>
            </figure>
        </div>
    </div>
<div class="card mb-3 col-10 mt-4 my-4">
  <img src="{{ asset('img/books.jpg') }}" height="600"  class="card-img-top" alt="Book">
  <div class="card-body text-center">
    <h5 class="card-title">Book List</h5>
    <p class="card-text">This website can create, edit, delete, and display a book.</p>
  </div>
</div>
    
</div>


      
@endsection