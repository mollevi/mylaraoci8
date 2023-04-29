<?php

namespace Database\Seeders;

use App\Models\Felhasznalo;
use Database\Factories\FelhasznaloFactory;
use Illuminate\Database\Seeder;

class FelhasznaloSeeder extends Seeder
{
    public function run():void
    {
        Felhasznalo::factory()->count(150)->create();
    }
}
