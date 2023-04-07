<?php

namespace App\Http\Controllers;

use App\Models\Megallo;

class MegalloController extends Controller
{
    /**
     * Fetch the data for a given megallo.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('megallo.data', [
            'megallo' => Megallo::findOrFail($id)
        ]);
    }
}
