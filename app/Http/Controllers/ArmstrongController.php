<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmstrongController extends Controller
{
    public function index()
    {
        return view('armstrong.index');
    }

    public function check(Request $request)
    {
        $number = $request->input('number');
        $digits = str_split($number);
        $sum = 0;
        $numDigits = count($digits);

        foreach ($digits as $digit) {
            $sum += pow($digit, $numDigits);
        }

        $isArmstrong = $sum == $number;

        return view('armstrong.result', compact('number', 'isArmstrong'));
    }
}
