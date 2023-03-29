<?php

namespace App\Http\Controllers;

use App\Models\TavolsagiBuszok;

class TavolsagibuszokController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('TavolsagiBuszok.profile', [
            'TavolsagiBuszok' => TavolsagiBuszok::findOrFail($id)
        ]);
    }
}
