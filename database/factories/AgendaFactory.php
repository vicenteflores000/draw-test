<?php

namespace Database\Factories;

use App\Models\Agenda;
use App\Models\EmpresaExterno;
use App\Models\SistemaUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agenda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => EmpresaExterno::factory(),
            'responsable_id' => SistemaUsuario::factory(),
            'fecha' => now(),
            'hora_inicio' => now(),
            'hora_termino' => now(),
            'valor' =>  rand(1,999),
            'estado' => rand(1,4),
            'author_id' => rand(1,999),
            'status' => rand(1,99)
        ];
    }
}
