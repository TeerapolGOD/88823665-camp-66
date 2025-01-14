<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function index(Request $request)
    {
        // รับค่าจากฟอร์ม (multiplier) หรือค่าเริ่มต้น
        $multiplier = $request->input('multiplier', 1);  // Default เป็น 1 ถ้าไม่ได้รับค่าจากฟอร์ม
        
        // คำนวณตารางสูตรคูณ
        $multiplication_table = [];
        for ($i = 1; $i <= 12; $i++) {
            $multiplication_table[] = [
                'multiplier' => $multiplier,
                'i' => $i,
                'result' => $multiplier * $i
            ];
        }

        // ส่งข้อมูลไปยัง View
        return view('multiplication', compact('multiplication_table', 'multiplier'));
    }
}



