<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validaáljuk a bejelentkezési adatokat
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Próbáljuk beléptetni a felhasználót
        if (Auth::attempt($validatedData)) {
            // Ha sikerült, átirányítjuk a felhasználót a megfelelő oldalra
            return redirect()->intended("userHome");
        } else {
            // Ha nem sikerült, visszairányítjuk a felhasználót a bejelentkező oldalra
            return back()->withInput()->withErrors(['email' => 'Hibás e-mail cím vagy jelszó']);
        }
    }

}
