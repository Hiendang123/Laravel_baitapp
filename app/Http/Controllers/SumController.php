<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sum()
    {
        return view('sum');
    }

    public function tinhtong(Request $request)
    {

        $request->validate([
            'number_A' => ['required', 'numeric', 'min:0'],
            'number_B' => ['required', 'numeric', 'min:0']
        ]);

        $numberA = floatval($request->number_A);
        $numberB = floatval($request->number_B);

        $sumNumber = $numberA + $numberB;

        return view('sum', compact('sumNumber', 'numberA', 'numberB'));
    }
}
