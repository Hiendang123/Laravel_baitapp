<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DientichHcnController extends Controller
{
    public function index()
    {
        return view('hinhhoc.dientich-hcn');
    }

    public function tinhdientichhcn(Request $request)
    {

        $request->validate([
            'length_rectangle' => ['required', 'numeric', 'min:0'],
            'width_rectangle' => ['required', 'numeric', 'min:0']
        ]);

        $Length_rectangle = floatval($request->length_rectangle);
        $Width_rectangle = floatval($request->width_rectangle);

        $dientich = $Length_rectangle * $Width_rectangle;

        return view('hinhhoc.dientich-hcn', compact('dientich', 'Length_rectangle', 'Width_rectangle'));
    }
}
