<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class ManageHomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('management.home',[
            'sliders'=>$sliders,
        ]);
    }

    public function add_slider(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:255',
            'sub_title'=>'required|max:255',
            'slider_image'=>'required',
        ]);
        
        $SliderModel = new Slider;
        
        if($request->file()) {
            $sliders_image = time().'_'.$request->slider_image->getClientOriginalName();
            $filePath = $request->file('slider_image')->storeAs('sliders', $sliders_image, 'public');

            $SliderModel->title = $request->title;
            $SliderModel->sub_title = $request->sub_title;
            $SliderModel->slider_image = time().'_'.$request->slider_image->getClientOriginalName();
            $SliderModel->save();

            return back()
            ->with('status','Content has been uploaded.')
            ->with('file', $sliders_image);
        }
        else{
            dd('Nothing');
        }
    }
}
