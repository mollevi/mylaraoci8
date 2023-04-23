<?php

namespace App\Http\Controllers;

use App\Models\Jegy;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class JegyController extends Controller
{
    public function showJegyekForm(): Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('jegyek');
    }
}
