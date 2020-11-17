<?php

namespace Database\Factories;

use App\Models\Oficina;
use Illuminate\Database\Eloquent\Factories\Factory;

class OficinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Oficina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'author_id' => rand(1,999),
            'status' => rand(1,9)
        ];
    }
}
