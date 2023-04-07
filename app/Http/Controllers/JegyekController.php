<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JegyekController extends Controller
{
    public function showJegyekForm()
    {
        return view('jegyek');
    }
}
