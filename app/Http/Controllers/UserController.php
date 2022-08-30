<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function create(){
        return view('users.register');
    }

    // Create a new user
    public function store(Request $request){
        $formFields= $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        auth()->login($user);
        return redirect()->to('/');
    }

    public function logout(Request $request){
        auth()->logout();
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields= $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect()->to('/')->with('message', 'You have been logged in successfully');
        }
        return back()->withErrors(['email'=> 'Invalid credentials'])->onlyInput('email');
//        $credentials = request(['email', 'password']);
//        if(!auth()->attempt($credentials)){
//            return back()->withErrors([
//                'message' => 'Please check your credentials and try again'
//            ]);
//        }
//        return redirect()->to('/');
    }
}
