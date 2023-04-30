<?php

namespace App\Http\Controllers;
use App\Models\Jarat;
use App\Models\Megallo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenetrendController extends Controller
{
    public function showMenetrendForm(): Factory|View|Application
    {
        return view('menetrend');
    }

    public function menetrendListazas(Request $request)
    {
        $A_telepules = $request->input('from');
        $B_telepules = $request->input('to');

        /*$query = DB::table('megallo')
            ->select(['vonat.indulasi_telepules as vonat_indulasi_telepules', 'vonat.indulasi_ido as vonat_indulasi_ido', 'tavolsagibusz.indulasi_telepules as tavolsagibusz_indulasi_telepules', 'tavolsagibusz.indulasi_ido as tavolsagibusz_indulasi_ido', 'helyibusz.indulasi_telepules as helyibusz_telepules', 'helyibusz.indulasi_ido as helyibusz_indulasi_ido', 'megallo.telepules', 'megallo.sorszam', 'megallo.ido', 'megallo.kilometer'])
            ->leftJoin('vonat', 'megallo.vonat_id', '=', 'vonat.id')
            ->leftJoin('tavolsagibusz', 'megallo.tavolsagibusz_id', '=', 'tavolsagibusz.id')
            ->leftJoin('helyibusz', 'megallo.helyibusz_id', '=', 'helyibusz.id')
            ->where('megallo.telepules', '=', $to)
            ->where(function ($q) use ($from) {
                $q->where('vonat.indulasi_telepules', '=', $from)
                    ->orWhere('tavolsagibusz.indulasi_telepules', '=', $from)
                    ->orWhere('helyibusz.indulasi_telepules', '=', $from);
            });

        $results = $query->get();*/

        $jaratok = /*DB::table("JARAT")->select(["LEIRAS","MEGNEVEZES","TIPUS","DATUM"])
            ->whereIn("JARAT.ID",function($q) use ($B_telepules,$A_telepules){
                $q->select(['MEGALLO_A.JARAT_ID'])
                ->from('MEGALLO', "MEGALLO_A")
                ->where('MEGALLO_A.TELEPULES', '=', $A_telepules)
                ->whereIn('MEGALLO_A.JARAT_ID',function($q) use ($B_telepules){
                    $q->select(['MEGALLO_B.JARAT_ID'])
                        ->from("MEGALLO", "MEGALLO_B")
                        ->where("MEGALLO_B.TELEPULES", "=", $B_telepules)
                        ->raw("MEGALLO_B.SORSZAM > MEGALLO_A.SORSZAM");
                });})
            ->orderBy("JARAT.DATUM")->get();*/

        Jarat::whereIn("JARAT.ID",function($q) use ($B_telepules,$A_telepules){
            $q->select(['MEGALLO_A.JARAT_ID'])
                ->from('MEGALLO', "MEGALLO_A")
                ->where('MEGALLO_A.TELEPULES', '=', $A_telepules)
                ->whereIn('MEGALLO_A.JARAT_ID',function($q) use ($B_telepules){
                    $q->select(['MEGALLO_B.JARAT_ID'])
                        ->from("MEGALLO", "MEGALLO_B")
                        ->where("MEGALLO_B.TELEPULES", "=", $B_telepules)
                        ->whereRaw("MEGALLO_B.SORSZAM > MEGALLO_A.SORSZAM");
                });})
        ->orderBy("JARAT.DATUM")->with("megallok")->get();
        return view('menetrend', ['jaratok' => $jaratok]);

    }
    public function showSzerkeszto()
    {
        return view('admin.szerkeszto');
    }
}
