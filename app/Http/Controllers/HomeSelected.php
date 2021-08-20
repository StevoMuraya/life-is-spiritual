<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeSelected extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Slider $slider)
    {
        $slider = Slider::where('id','=',$slider->id)->first();
        dd($slider);
        return view('management.selected-home',[
            'slider' => $slider,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);

        // show the view and pass the shark to it
        return view('management.selected-home',[
            'slider' => $slider,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $id)
    {
        $slider = Slider::find($id);

        $this->validate($request,[
            'title'=>'required|max:255',
            'sub_title'=>'required|max:255',
        ]);


        if($request->file()) {
            $sliders_image = time().'_'.$request->slider_image->getClientOriginalName();
            $filePath = $request->file('slider_image')->storeAs('sliders', $sliders_image, 'public');

            $slider->title = $request->title;
            $slider->sub_title = $request->sub_title;
            $slider->slider_image = time().'_'.$request->slider_image->getClientOriginalName();
            $slider->save();

            return back();
            // ->with('status','Content has been uploaded.')
            // ->with('file', $sliders_image);
        }
        else{ 
            $slider->title = $request->title;
            $slider->sub_title = $request->sub_title;
            $slider->save();

            return back();
            // ->with('status','Content has been uploaded.');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
