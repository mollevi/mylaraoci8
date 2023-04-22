<?php

namespace App\Http\Controllers;

use App\Models\TavolsagiBuszok;
use Illuminate\View\View;

class TavolsagibuszokController extends Controller
{
    /**
     * Fetch the data for a given tavolsagi busz.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('tavolsagibusz.data', [
            'tavolsagibusz' => TavolsagiBuszok::findOrFail($id)
        ]);
    }
}
