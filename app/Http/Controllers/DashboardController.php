<?php

namespace App\Http\Controllers;

use App\Models\Books;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index(){
        $books = Books::get();
        // dd($books);
        
        return view('management.dashboard',[
            'books' => $books]);
    }

    public function add_book(Request $request)
    {
        //Validation
        $this-> validate($request,[
            'title'=> 'required|max:255',
            'author'=> 'required|max:255',
            'price'=> 'required|max:255',
            'description'=> 'required',
            'book_cover'=> 'required'
        ]);
        
        $booksModel = new Books;
        
        if($request->file()) {
            $books_cover = time().'_'.$request->book_cover->getClientOriginalName();
            $filePath = $request->file('book_cover')->storeAs('books', $books_cover, 'public');

            $booksModel->book_cover = time().'_'.$request->book_cover->getClientOriginalName();
            // $booksModel->file_path = '/books/' . $filePath;
            $booksModel->title = $request->title;
            $booksModel->author = $request->author;
            $booksModel->price = $request->price;
            $booksModel->description = $request->description;
            $booksModel->save();

            return back()
            ->with('status','File has been uploaded.')
            ->with('file', $books_cover);
        }

    }
}
