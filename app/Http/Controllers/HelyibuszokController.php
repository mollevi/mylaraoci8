<?php

namespace App\Http\Controllers;

use App\Models\HelyiBuszok;
use Illuminate\View\View;

class HelyibuszokController extends Controller
{

    /**
     * Fetch the data for a given helyi busz.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('helyibusz.data', [
            'helyibusz' => HelyiBuszok::findOrFail($id)
        ]);
    }
}
