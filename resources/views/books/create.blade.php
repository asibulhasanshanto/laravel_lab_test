@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mt-4">Create book page </h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="exampleInputEmail1"
                    aria-describedby="">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Author</label>
                <input type="text" name="author" value="{{ old('author') }}" class="form-control">
                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="number" min=0 name="price" value="{{ old('price') }}" class="form-control">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ISBN</label>
                <input type="text" name="isbn" value="{{ old('isbn') }}" class="form-control">
                @error('isbn')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
