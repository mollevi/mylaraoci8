<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
        $from = $request->input('from');
        $to = $request->input('to');

        $query = DB::table('megallo')
            ->select(['vonat.indulasi_telepules as vonat_indulasi_telepules', 'vonat.indulasi_ido as vonat_indulasi_ido', 'tavolsagibusz.indulasi_telepules as tavolsagibusz_indulasi_telepules', 'tavolsagibusz.indulasi_ido as tavolsagibusz_indulasi_ido', 'helyibusz.telepules as helyibusz_telepules', 'helyibusz.indulasi_ido as helyibusz_indulasi_ido', 'megallo.telepules', 'megallo.sorszam', 'megallo.ido', 'megallo.kilometer'])
            ->leftJoin('vonat', 'megallo.vonat_id', '=', 'vonat.id')
            ->leftJoin('tavolsagibusz', 'megallo.tavolsagibusz_id', '=', 'tavolsagibusz.id')
            ->leftJoin('helyibusz', 'megallo.helyibusz_id', '=', 'helyibusz.id')
            ->where('megallo.telepules', '=', $to)
            ->where(function ($q) use ($from) {
                $q->where('vonat.indulasi_telepules', '=', $from)
                    ->orWhere('tavolsagibusz.indulasi_telepules', '=', $from)
                    ->orWhere('helyibusz.telepules', '=', $from);
            });

        $results = $query->get();

        //die($results);
        return view('menetrend', ['jaratok' => $results]);

    }
    public function showSzerkeszto(Request $request)
    {
        $query = DB::table('megallo')
            ->select(['vonat.indulasi_telepules as vonat_indulasi_telepules', 'vonat.indulasi_ido as vonat_indulasi_ido', 'tavolsagibusz.indulasi_telepules as tavolsagibusz_indulasi_telepules', 'tavolsagibusz.indulasi_ido as tavolsagibusz_indulasi_ido', 'helyibusz.telepules as helyibusz_telepules', 'helyibusz.indulasi_ido as helyibusz_indulasi_ido', 'megallo.telepules', 'megallo.sorszam', 'megallo.ido'])
            ->leftJoin('vonat', 'megallo.vonat_id', '=', 'vonat.id')
            ->leftJoin('tavolsagibusz', 'megallo.tavolsagibusz_id', '=', 'tavolsagibusz.id')
            ->leftJoin('helyibusz', 'megallo.helyibusz_id', '=', 'helyibusz.id');

        $results = $query->get();

        return view('menetrend', ['jaratok' => $results]);

    }
}
