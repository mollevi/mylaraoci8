<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;

class FelhasznaloController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('felhasznalo.profile', [
            'felhasznalo' => Felhasznalo::findOrFail($id)
        ]);
    }
}
