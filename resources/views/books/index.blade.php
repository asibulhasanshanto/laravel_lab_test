@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mt-4">Books</h2>
        {{-- create a button to create book --}}
        <a href="{{ route('books.create') }}" class="btn btn-primary mt-4">Create Book</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>ISBN</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>
                            <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
