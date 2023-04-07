<?php

namespace App\Http\Controllers;

use App\Models\Vonatok;

class VonatokController extends Controller
{
    /**
     * Fetch the data for a given vonat.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('vonat.data', [
            'vonat' => Vonatok::findOrFail($id)
        ]);
    }
}
