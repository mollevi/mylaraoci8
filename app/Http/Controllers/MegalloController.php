<?php

namespace App\Http\Controllers;

use App\Models\Megallo;
use Illuminate\View\View;

class MegalloController extends Controller
{
    /**
     * Fetch the data for a given megallo.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('megallo.data', [
            'megallo' => Megallo::findOrFail($id)
        ]);
    }
}
