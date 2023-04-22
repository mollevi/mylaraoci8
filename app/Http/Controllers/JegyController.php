<?php

namespace App\Http\Controllers;

use App\Models\Jegy;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class JegyController extends Controller
{

    /**
     * Fetch the data for a given jegy.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('jegy.data', [
            'jegy' => Jegy::findOrFail($id)
        ]);
    }

    public function showJegyekForm(): Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('jegyek');
    }
}
