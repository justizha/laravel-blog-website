<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Session\Middleware\StartSession;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register.index',[
            'title'=> 'Register',
            'active'=> 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:30','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);        
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

     $request->session()->flash('success','Registration Success! Please Login'); 

     return redirect('/login');
    }
}
