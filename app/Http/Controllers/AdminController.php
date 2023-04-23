<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends \Illuminate\Routing\Controller
{

    public function processLogin(Request $request): RedirectResponse
    {
        // Validaáljuk a bejelentkezési adatokat
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Próbáljuk beléptetni az admint
        if (Auth::guard('admin')->attempt($validatedData)) {
            // Ha sikerült, átirányítjuk az admint a megfelelő oldalra
            return redirect()->intended("admin/home");
        } else {
            // Ha nem sikerült, visszairányítjuk a felhasználót a bejelentkező oldalra
            return back()->withInput()->withErrors(['email' => 'Hibás e-mail cím vagy jelszó']);
        }
    }

    public function showHome(): Factory|View|Application
    {
        return view('admin.home');
    }

    public function showProfile() {
        // get the currently authenticated user
        $admin = Auth::guard('admin')->user();



        // display the user's name
        return view('admin.profile', ['admin' => $admin]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return Redirect::route('welcome');
    }

}
