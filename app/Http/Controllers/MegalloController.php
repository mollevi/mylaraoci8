<?php

namespace App\Http\Controllers;

use App\Models\Megallo;

class MegalloController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('Megallo.profile', [
            'Megallo' => Megallo::findOrFail($id)
        ]);
    }
}
