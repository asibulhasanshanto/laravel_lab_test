@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mt-4">Update book page </h2>
        <form action="{{ route('books.update', ['book' => $book]) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" id="exampleInputEmail1"
                    aria-describedby="">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Author</label>
                <input type="text" name="author" value="{{ $book->author }}" class="form-control">
                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="number" min=0 name="price" value="{{ $book->price }}" class="form-control">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ISBN</label>
                <input type="text" name="isbn" value="{{ $book->isbn }}" class="form-control">
                @error('isbn')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
