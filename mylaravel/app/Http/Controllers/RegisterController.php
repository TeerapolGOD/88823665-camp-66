<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function index(){
        return view('register');
    }
    function create(Request $req){

        $validatedData = $req->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).+$/',
        ]);

        $obj_user = new User;
        $obj_user ->name = $req->input('name');
        $obj_user ->email = $req->email;
        $obj_user ->password = $req->password;
        $obj_user ->save();
        return redirect('user');
    }
}