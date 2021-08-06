<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['guest']);
    }

    public function index(){
        return view('management.login');
    }

    public function login(Request $request)
    {
        //validate
        $this->validate($request,[
            'email'=>'required|max:255|email',
            'password'=>'required'
        ]);

        //Sign in
        if(!Auth::attempt($request->only('email','password'),$request->remember)){
            return back() -> with('status', 'Invalid login details');
        }

        //redirect
        return redirect()->route('dashboard');
    }
}
