<?php

namespace Database\Seeders;

use App\Models\Jarat;
use App\Models\Megallo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class JaratMegalloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $jaratok = Jarat::factory()
            ->count(20)
            ->create();

        $jaratok->each(function ($jarat) {
            // Create MEGs for each PT
            for ($i = 1; $i <= rand(9,23); $i++) {
                $megallo = Megallo::factory()
                    ->make(['sorszam' => $i, 'jarat_id' => $jarat->id]);

                if ($i > 1) {
                    $previous_megallo = Megallo::where('JARAT_ID', $jarat->id)
                        ->where('SORSZAM', $i - 1)->first();
                    if ($previous_megallo) {
                        $previous_idopont = Carbon::parse($previous_megallo->idopont);
                        $new_idopont = $previous_idopont->addMinutes(rand(1, 120));
                        $megallo->idopont = $new_idopont->toDateTimeString();
                    }
                }else{
                    $jarat->datum = $megallo->idopont;
                    $jarat->save();
                }

                $megallo->save();
            }
        });
    }
}
