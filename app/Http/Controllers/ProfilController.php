<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function showProfilForm() {
        // get the currently authenticated user
        $user = Auth::user();



        // display the user's name
        return view('profil', ['felhasznalo' => $user]);
    }
}
