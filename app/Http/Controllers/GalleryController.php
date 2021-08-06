<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::get();

        return view('management.gallery',
        ['gallery'=>$gallery]);
    }

    public function upload(Request $request)
    {
        $this->validate($request,[
            'image' => 'required'
        ]);

        
        $galleryModel = new Gallery;
        
        if($request->file()) {
            $image_name = time().'_'.$request->image->getClientOriginalName();
            $request->file('image')->storeAs('gallery', $image_name, 'public');

            $galleryModel->image_name = time().'_'.$request->image->getClientOriginalName();
            $galleryModel->save();

            return back()
            ->with('status','File has been uploaded.')
            ->with('file', $image_name);
        }
    }
}
