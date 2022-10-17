<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books', compact('books'));
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'author' => 'required',
        ]);
        $name = $request->post('name');
        $author = $request->post('author');
        Book::query()->create([
                'name' => $name,
                'author' => $author
        ]);
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function editIndex(Request $request)
    {
        $id = $request->get('id');
        $book = Book::query()->find($id);
        return view('book', compact('book'));
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'book_id' => 'required'
        ]);
        $name = $request->post('name');
        $author = $request->post('author');
        $book = Book::query()->find($request->post('book_id'));
        $book->update([
            'name' => $name,
            'author' => $author,
        ]);
        $books = Book::all();
        return view('books', compact('books'));
    }
    public function delete(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
        ]);
        $book = Book::query()->find($request->get('book_id'));
        $book->delete();
        $books = Book::all();
        return view('books', compact('books'));
    }
}
