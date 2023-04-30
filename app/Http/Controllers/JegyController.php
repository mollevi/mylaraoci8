<?php

namespace App\Http\Controllers;

use App\Models\Arazas;
use App\Models\Jegy;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class JegyController extends Controller
{
    public function showJegy(): Factory|\Illuminate\Contracts\View\View|Application
    {
        Jegy::where("felhasznalo_id", "=", Auth::id());
        return view('user.jegyek');
    }
    public function showJegyvasarlas(String $tipus): Factory|\Illuminate\Contracts\View\View|Application
    {
        $egysegar = Arazas::where("tipus", "=", $tipus)->latest()->get()->first()->egysegar;
        return view('user.jegyvasarlas', ["egysegar" => $egysegar,"tipus"=>$tipus ]);
    }
    public function processJegyvasarlas(){
        $szam = $_REQUEST["mennyiseg"];
        $tipus = $_REQUEST["milyenfajta"];
        $egysegar = Arazas::where("TIPUS", "=", $tipus)->latest()->get()->first()->egysegar;
        Jegy::create([
            "ar"=>$szam * $egysegar,
            "tipus"=>$tipus,
            "tavolsag" => $szam,
            "felhasznalo_id" => Auth::id()
            ]);
        return redirect()->back()->with('success', 'Sikerült a jegyvásárlás.');
    }
}
