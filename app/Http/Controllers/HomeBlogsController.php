<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeBlogsController extends Controller
{
    public function index()
    {
        $articles = Articles::latest()->offset(1)->limit(PHP_INT_MAX)->get();
        $main_article = Articles::latest()->limit(1)->get();
        return view('blogs',[
            'articles'=>$articles,
            'main_article'=>$main_article,
        ]);
    }
}
