<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenController extends Controller
{
    //
    public function kalkulator1()
    {
        return view('kalkulator1.index1');
    }
    public function kalkulator2()
    {
        return view('kalkulator2.index2');
    }
}
