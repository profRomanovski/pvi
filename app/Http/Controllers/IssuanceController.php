<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Issuance;
use Illuminate\Http\Request;

class IssuanceController extends Controller
{
    public function index(Request $request)
    {
        $issuances = [];

        if ($request->get('book_id')) {
            $book = Book::query()->find($request->get('book_id'));
            $issuances = $book->issuances;
        } else {
            $issuances = Issuance::all();
        }

        return view('issuance', compact('issuances'));
    }

    public function createIndex(Request $request)
    {
        $bookId = $request->get('book_id');
        $bookName = Book::query()->find($bookId)->name;
        return view('issuance-create',
            compact('bookId', 'bookName')
        );
    }

    public function create(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'customer' => 'required',
        ]);
        Issuance::query()->create([
            'book_id' => $request->post('book_id'),
            'customer' => $request->post('customer'),
            'term' => now()->toDate()
        ]);

        $issuances = Issuance::all();
        return view('issuance', compact('issuances'));
    }
}
