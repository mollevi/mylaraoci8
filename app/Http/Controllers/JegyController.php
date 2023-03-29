<?php

namespace App\Http\Controllers;

use App\Models\Jegy;

class JegyController extends Controller
{

    /**
     * Fetch the data for a given jegy.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('Jegy.profile', [
            'Jegy' => Jegy::findOrFail($id)
        ]);
    }
}
