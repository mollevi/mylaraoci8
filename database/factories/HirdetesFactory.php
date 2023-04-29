<?php

namespace Database\Factories;

use App\Models\Hirdetes;
use Illuminate\Database\Eloquent\Factories\Factory;

class HirdetesFactory extends Factory
{
    protected $model = Hirdetes::class;

    public function definition():array
    {
        return [
            'cim' => $this->faker->realText(80),
            'tartalom' => $this->faker->unique()->realText,
            'created_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
