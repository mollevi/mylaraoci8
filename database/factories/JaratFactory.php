<?php

namespace Database\Factories;

use App\Models\Jarat;
use Illuminate\Database\Eloquent\Factories\Factory;

class JaratFactory extends Factory
{
    protected $model = Jarat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array
    {
        return [
            'tipus' => $this->faker->randomElement(["Vonat","Helyi busz","Távolsági busz"]),
            'megnevezes' => $this->faker->firstName."-".$this->faker->numberBetween(11,99),
            'leiras' => $this->faker->text,
            'datum' => $this->faker->date(),
        ];
    }
}
