<?php

namespace Database\Factories;

use App\Models\SistemaUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class SistemaUsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SistemaUsuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id'=>rand(1,9),
            'status' => rand(1,9),
        ];
    }
}
