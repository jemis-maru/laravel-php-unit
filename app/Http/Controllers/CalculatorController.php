<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add(Request $request)
    {
        $a = (int) $request->input('a', 0);
        $b = (int) $request->input('b', 0);

        return response()->json([
            'result' => $a + $b,
        ]);
    }

    public function subtract(Request $request)
    {
        $a = (int) $request->input('a', 0);
        $b = (int) $request->input('b', 0);

        return response()->json([
            'result' => $a - $b,
        ]);
    }
}
