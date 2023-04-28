<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            return Redirect::route('admin/home');
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
        return view('admin.profile', ['admin' => Auth::guard('admin')->user()]);
    }

    public function showPasswordChanger():Factory|\Illuminate\Contracts\View\View|Application
    {
        return view("admin.password-changer");
    }

    public function processPasswordChange (Request $request) {
        $admin = Auth::guard("admin")->user();

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $new_password_confirmation = $request->input('new_password_confirmation');

        if (!Hash::check($current_password, $admin->getAuthPassword())) {
            return redirect()->back()->with('status', 'The current password is incorrect.');
        }

        if ($new_password !== $new_password_confirmation) {
            return redirect()->back()->with('status', 'The new password and its confirmation do not match.');
        }

        DB::table('admin')->where('id', $admin->getAuthIdentifier())->update(['jelszohash' => Hash::make($new_password)]);

        return redirect()->back()->with('status', 'The password has been changed.');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
