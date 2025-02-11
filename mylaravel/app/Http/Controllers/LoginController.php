<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }
    function login(Request $req){
     
        //print_r($reqp->email);
        //print_r($req->password);
       
        $user = User::where('email' , $req->email)->first();
        if(Hash::check($req->password, $user->password)){
            return redirect('/');
            session()->forget('error');
            session(['user' => $user]);
        }else{
            sessicon(['error' => 'ข้อมูลการเข้าสู่ระบบไม่ถูกต้อง']);
            return view('login', [ 'email' => $req->email]);
            return redirect('/login');
        }
    }
}
