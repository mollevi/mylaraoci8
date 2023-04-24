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

    public function processLogin(Request $request): RedirectResponse
    {
        // Validáljuk a bejelentkezési adatokat
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedData)) {
            // Ha sikerült beléptetni a felhasználót, átirányítjuk a felhasználót a megfelelő oldalra
            return Redirect::route('home');
        } else {
            // Ha nem, visszairányítjuk a felhasználót a bejelentkező oldalra
            return back()->withInput()->withErrors(['email' => 'Hibás e-mail cím vagy jelszó']);
        }
    }
    public function showPasswordChanger():Factory|\Illuminate\Contracts\View\View|Application
    {
        return view("user.password-changer");
    }


    public function showHome(): Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('user.home');
    }

    public function showProfile(): \Illuminate\Contracts\View\View|Factory|RedirectResponse|Application
    {
        return view('user.profile', ['felhasznalo' => Auth::user()]);
    }

    public function processPasswordChange (Request $request) {
        $felhasznalo = Auth::user();

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $new_password_confirmation = $request->input('new_password_confirmation');

        if (!Hash::check($current_password, $felhasznalo->getAuthPassword())) {
            return redirect()->back()->with('status', 'The current password is incorrect.');
        }

        if ($new_password !== $new_password_confirmation) {
            return redirect()->back()->with('status', 'The new password and its confirmation do not match.');
        }

        DB::table('felhasznalo')->where('id', $felhasznalo->getAuthIdentifier())->update(['jelszohash' => Hash::make($new_password)]);

        return redirect()->back()->with('status', 'The password has been changed.');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return Redirect::route('welcome');
    }
}
