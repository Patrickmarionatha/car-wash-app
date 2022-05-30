<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'confirm-password' => 'required|same:password',
            'email' => 'required|email:dns|unique:users',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['confirm-password'] = bcrypt($validatedData['confirm-password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfull!');
        return redirect('/login');
    }
}
