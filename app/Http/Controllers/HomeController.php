<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Books;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $books = Books::limit(4)->latest()->get();
        $testimonials = Testimonials::latest()->get();
        $articles = Articles::offset(1)->limit(3)->latest()->get();
        $main_article = Articles::offset(0)->limit(1)->latest()->get();
        return view('home',[
            'books' => $books,
            'main_article' => $main_article,
            'testimonials' => $testimonials,
            'articles' => $articles]);
    }
}
