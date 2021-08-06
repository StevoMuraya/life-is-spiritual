<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->limit(6)->get();
        return view('about',[
            'images' => $images
        ]);
    }
}
