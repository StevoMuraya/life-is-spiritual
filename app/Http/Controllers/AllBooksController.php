<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class AllBooksController extends Controller
{
    public function index()
    {
        $books  = Books::latest()->get();
        return view('books',[
            'books'=> $books
        ]);
    }
}
