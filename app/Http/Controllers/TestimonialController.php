<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index ()
    {
        $testimonies = Testimonials::get();
        return view('management.testimonials',[
            'testimonies' => $testimonies
        ]);
    }

    public function upload(Request $request)
    {
        $this-> validate($request,[
            'name' => 'required|max:255',
            'testimony' => 'required'
        ]);

        $testimonyModel = new Testimonials;

        $testimonyModel->name = $request->name;
        $testimonyModel->testimony = $request->testimony;
        $testimonyModel->save();

        return back();        
    }
}
