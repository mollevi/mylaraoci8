<?php

namespace Database\Seeders;

use App\Models\Hirdetes;
use Illuminate\Database\Seeder;

class HirdetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        Hirdetes::factory()
            ->count(40)
            ->create();
    }
}
