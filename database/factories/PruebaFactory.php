<?php

namespace Database\Factories;

use App\Models\Prueba;
use Illuminate\Database\Eloquent\Factories\Factory;

class PruebaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prueba::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->name(),
            'cedula'=>$this->faker->unique()->text(9),
            'correo'=>$this->faker->unique()->safeEmail
        ];
    }
}
