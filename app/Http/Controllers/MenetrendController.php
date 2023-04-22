<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MenetrendController extends Controller
{
    public function showMenetrendForm(): Factory|View|Application
    {
        return view('menetrend');
    }
}
