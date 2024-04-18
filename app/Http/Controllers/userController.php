<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{

     public function fetchAllUser(){
        $user = User::all();
        return $user->toArray();
     }
    public function registration(Request $request){
        
      $validate =   $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $useremail = User::where('email', $validate['email'])->first();
        if($useremail){
        return back()->withErrors([
            'email' => 'The provided email is already taken please insert another one.',
        ]);
        }
      
            $table = new User();
            $table->name = $request->name;
            $table->email = $request->email;
            $table->password = $request->password;
            $table->save();
            return redirect('/');
            // return redirect('registerview')->with('user', 'user register success');
        
   
    }

    public function login(Request $request){
        $validate = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])) {
            // Authentication successful, redirect the authenticated user
            return redirect('/');
        } else {
            // Authentication failed, redirect back to the login page with an error message
            return redirect('signin')->with('loginerror', 'Invalid email or password');
        }
    }
    
}