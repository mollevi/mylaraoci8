<?php

namespace App\Http\Controllers;

use App\Models\TavolsagiBuszok;

class TavolsagibuszokController extends Controller
{
    /**
     * Fetch the data for a given tavolsagi busz.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('tavolsagibusz.data', [
            'tavolsagibusz' => TavolsagiBuszok::findOrFail($id)
        ]);
    }
}
