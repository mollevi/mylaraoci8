<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends \Illuminate\Routing\Controller
{

    public function login(Request $request)
    {
        // Validaáljuk a bejelentkezési adatokat
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Próbáljuk beléptetni a felhasználót
        if (Auth::guard('admin')->attempt($validatedData)) {
            // Ha sikerült, átirányítjuk a felhasználót a megfelelő oldalra
            return redirect()->intended("adminHome");
        } else {
            // Ha nem sikerült, visszairányítjuk a felhasználót a bejelentkező oldalra
            return back()->withInput()->withErrors(['email' => 'Hibás e-mail cím vagy jelszó']);
        }
    }

    public function showAdminHomeForm()
    {
        return view('adminHome');
    }

    public function showAdminProfilForm() {
        // get the currently authenticated user
        $admin = Auth::guard('admin')->user();



        // display the user's name
        return view('adminProfil', ['admin' => $admin]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return Redirect::route('home');
    }

}
