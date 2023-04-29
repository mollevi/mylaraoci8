<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'nev' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'szuldatum' => $this->faker->date(),
            'jelszohash' => bcrypt('password'),
        ];
    }
}
