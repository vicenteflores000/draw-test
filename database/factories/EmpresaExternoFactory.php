<?php

namespace Database\Factories;

use App\Models\EmpresaExterno;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpresaExternoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmpresaExterno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'empresa_id' => rand(1,999),
            'rut' => $this->faker->name(),
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->name(),
            'razon_social' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail,
            'celular' => Str::random(10),
            'es_cliente' => rand(1,999),
            'es_proveedor' => rand(1,999),
            'author_id' => rand(1,999),
            'status' => rand(1,99),
        ];
    }
}
