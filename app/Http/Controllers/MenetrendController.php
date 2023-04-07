<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenetrendController extends Controller
{
    public function showMenetrendForm()
    {
        return view('menetrend');
    }
}
