<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeGalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::latest()->get();
        return view('gallery',[
            'gallery'=>$gallery
        ]);
    }
}
