<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function store(Request $request){
        // dd($request);
        //Validate
        $this->validate($request,[
            'name'=> 'required|max:255',
            'email'=> 'required|max:255|email',
            'password'=> "required|confirmed",
        ]);
        //Store
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => Hash::make($request ->password    )
        ]);
        //Sign in user
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        //Redirect
        return redirect() ->route('dashboard');
    }
}
