<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
         $books = Book::all();

         return view('books.index',['books'=>$books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|string',
            'author'=>'required|string',
            'price'=>'required|integer|min:0',
            'isbn'=>'required'
        ]);

        Book::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'price'=>$request->price,
            'isbn'=>$request->isbn
        ]);

        return redirect()->route('books.index')->with('success','Book created successfully');
    }

    public function edit(Book $book)
    {
        return view('books.edit',['book'=>$book]);
    }

    public function update(Book $book,Request $request){
        $data = $request->validate([
            'title'=>'required|string',
            'author'=>'required|string',
            'price'=>'required|integer|min:0',
            'isbn'=>'required'
        ]);

        $book->update($data);

        return redirect()->route('books.index')->with('success','Book updated successfully');
    }

    public function destroy(Book $book){
        $book->delete();

        return redirect()->route('books.index')->with('success','Book deleted successfully');
    }
}