<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChuvihcnController extends Controller
{
    public function index()
    {
        return view('hinhhoc.chuvi-hcn');
    }

    public function tinhchuvihcn(Request $request)
    {
        $request->validate([
            'length' => ['required', 'numeric', 'min:0'],
            'width' => ['required', 'numeric', 'min:0']
        ]);

        $length1 = floatval($request->length);
        $width1 = floatval($request->width);

        $chuvi = ($length1 + $width1) * 2;

        return view('hinhhoc.chuvi-hcn', compact('chuvi', 'length1', 'width1'));
    }
}
