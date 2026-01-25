<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register",
        ]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',
            'username' => ['required', 'min:4', 'max:255', 'unique:users,username'],
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:4|max:255',
        ]);

        // Here you would typically create the user in the database
        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            // 'password' => bcrypt($validatedData['password']),
            'password' => Hash::make($validatedData['password']),
        ]);

        // $request->session()->flash('success', 'Registration successful! Please login.');

        // Redirect to a desired location with a success message
        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }
}
