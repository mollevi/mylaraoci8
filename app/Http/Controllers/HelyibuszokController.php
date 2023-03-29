<?php

namespace App\Http\Controllers;

use App\Models\HelyiBuszok;

class HelyibuszokController extends Controller
{

    /**
     * Fetch the data for a given helyi busz.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('helyibusz.data', [
            'helyibusz' => HelyiBuszok::findOrFail($id)
        ]);
    }
}
