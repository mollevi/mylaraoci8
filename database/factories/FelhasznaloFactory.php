<?php

namespace Database\Factories;

use App\Models\Felhasznalo;
use Illuminate\Database\Eloquent\Factories\Factory;

class FelhasznaloFactory extends Factory
{
    protected $model = Felhasznalo::class;

    public function definition():array
    {
        return [
            'nev' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'szuldatum' => $this->faker->date(),
            'jelszohash' => bcrypt('password'),
            'lakcim' => $this->faker->address,
        ];
    }
}
