<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function index(Request $request)
    {
  
        $multiplier = $request->input('multiplier', 1);
        
     
        $multiplication_table = [];
        for ($i = 1; $i <= 12; $i++) {
            $multiplication_table[] = [
                'multiplier' => $multiplier,
                'i' => $i,
                'result' => $multiplier * $i
            ];
        }

       
        return view('multiplication', compact('multiplication_table', 'multiplier'));
    }
}



