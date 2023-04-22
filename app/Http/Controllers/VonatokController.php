<?php

namespace App\Http\Controllers;

use App\Models\Vonatok;
use Illuminate\View\View;

class VonatokController extends Controller
{
    /**
     * Fetch the data for a given vonat.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('vonat.data', [
            'vonat' => Vonatok::findOrFail($id)
        ]);
    }
}
