<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class AdminController extends \Illuminate\Routing\Controller
{
    /**
     * Show the profile for a given admin.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('admin.profile', [
            'admin' => Admin::findOrFail($id)
        ]);
    }
}
