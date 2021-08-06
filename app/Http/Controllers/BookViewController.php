<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookViewController extends Controller
{
    public function index (Books $book)
    {
        $books = Books::limit(4)->whereNotIn('id', [$book->id])->latest()->get();
        $book = Books::where('id','=',$book->id)->first();
        // dd($book);
        return view('book-view',[
            'select_book' => $book,
            'books' => $books,
        ]);
    }
}
