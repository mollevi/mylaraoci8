<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FelhasznaloController extends Controller
{
    public function showLoginForm(): Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('login');
    }
    public function login(Request $request): RedirectResponse
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

    public function showUserHomeForm(): Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('userHome');
    }

    public function ChangePassword (Request $request) {
        $felhasznalok = Auth::user();

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $new_password_confirmation = $request->input('new_password_confirmation');

        if (!Hash::check($current_password, $felhasznalok->getAuthPassword())) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        if ($new_password !== $new_password_confirmation) {
            return redirect()->back()->with('error', 'The new password and its confirmation do not match.');
        }

        DB::table('felhasznalo')->where('id', $felhasznalok->getAuthIdentifier())->update(['jelszohash' => Hash::make($new_password)]);

        return redirect()->back()->with('success', 'The password has been changed.');
    }

    public function showProfilForm(): \Illuminate\Contracts\View\View|Factory|RedirectResponse|Application
    {
        // get the currently authenticated user
        $user = Auth::user();

        if ($user==null){
            return Redirect::route('home');
        }

        // display the user's name
        return view('profil', ['felhasznalo' => $user]);

    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return Redirect::route('home');
    }
}
