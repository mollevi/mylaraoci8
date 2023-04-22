<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FelhasznaloController extends Controller
{
    /**
     * Show the profile for a given felhasznalo.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id): \Illuminate\View\View
    {
        return view('felhasznalo.profile', [
            'felhasznalo' => Felhasznalo::findOrFail($id)
        ]);
    }
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

    public function showUserHomeForm()
    {
        return view('userHome');
    }

    public function showProfilForm() {
        // get the currently authenticated user
        $user = Auth::user();

        if ($user==null){
            return Redirect::route('home');
        }

        // display the user's name
        return view('profil', ['felhasznalo' => $user]);

    }

    public function logout()
    {
        auth()->logout();
        return Redirect::route('home');
    }
}
