@extends('layout.main')
@section('title', 'Add new book')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-4 my-4 text-center">Add new book</h1>
            <figure class="text-end">
                <blockquote class="blockquote">
                    <p>“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Dr. Seuss, <cite title="Source Title">I Can Read With My Eyes Shut!</cite>
                </figcaption>
            </figure>
            <form method="post" action="/book">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Input Book Title" name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class=" invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author Name</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Input Author Name" name="author" value="{{ old('author') }}">
                    @error('author')
                    <div class=" invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" placeholder="Input Description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class=" invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Book Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Input Book Price" name="price" value="{{ old('price') }}">
                    @error('price')
                    <div class=" invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
            </form>


        </div>
    </div>
</div>
@endsection