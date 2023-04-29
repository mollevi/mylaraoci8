<?php

namespace Database\Factories;

use App\Models\Megallo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MegalloFactory extends Factory
{
    protected $model = Megallo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        return [
            'telepules' => $this->faker->city,
            'nev' => $this->faker->streetName,
            'kilometer' => $this->faker->randomFloat(2, 0.3 , 30),
            'idopont' => $this->faker->dateTimeThisYear(),
            'jarat_id' => null,
            'sorszam' => null,
        ];
    }
}
