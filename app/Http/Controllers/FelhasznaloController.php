<?php

namespace App\Http\Controllers;

use App\Models\Felhasznalo;
use App\Models\Hirdetes;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Yajra\Pdo\Oci8\Exceptions\Oci8Exception;

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
        $hirdetesek = Hirdetes::orderBy("UPDATED_AT")->orderBy("UPDATED_AT")->get();
        return view('user.home', ["hirdetesek"=>$hirdetesek]);
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

    public function processRegister(Request $request){
        try{
            $carbonDatetime = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('szuldatum'));
            $dbDatetime = $carbonDatetime->format('Y-m-d H:i:s');

            $user = Felhasznalo::where('email', $request->input('email'))->first();
            if($user){
                return redirect()->back()->with( 'error', 'Az e-mail címed regisztrálva van, jelentkezz be!' );
            }
            if($request->input("jelszo") != $request->input("jelszo2")) {
                return redirect()->back()->with('error', 'Nem egyezik a két jelszó');
            }

            DB::beginTransaction();
            $felhasznalo = Felhasznalo::make([
                "nev"=>$request->input('nev'),
                "email"=>$request->input('email'),
                "szuldatum"=>$dbDatetime,
                "jelszohash"=>Hash::make($request->input('jelszo')),
                "lakcim"=>$request->input('lakcim'),
            ]);
            if($felhasznalo->save()){
                Auth::login($felhasznalo);
                DB::commit();
                Redirect::route('home');
            }else{
                DB::rollBack();
                return redirect()->back()->with('error', 'Valami hiba történt, próbáld újra később!');
            }
        }catch(Oci8Exception $e){
            DB::rollBack();
        }
        return redirect()->back()->with('error', 'Valami hiba történt, próbáld újra később!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
