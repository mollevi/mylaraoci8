<?php

namespace App\Http\Controllers;

use App\Models\HelyiBuszok;

class HelyibuszokController extends Controller
{

    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('HelyiBuszok.profile', [
            'HelyiBuszok' => HelyiBuszok::findOrFail($id)
        ]);
    }
}
