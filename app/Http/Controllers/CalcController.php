<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculator;

class CalcController extends Controller
{
    public function index()
    {
        $data = Calculator::orderBy('id', 'DESC')->take(5)->get();
        return view('Calculator.calculator', compact('data'));
    }

    public function submitCalc(Request $request)
    {
        Calculator::create([
            'data' => $request->data,
            'result' => $request->result
        ]);

        return response()->json([ 'status' => 200 ]);
    }

}
