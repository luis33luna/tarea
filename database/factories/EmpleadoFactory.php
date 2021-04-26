<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'Nombres' => $this->faker->name(),
            'ApellidoPaterno' => $this->faker->firstName(),
            'ApellidoMaterno' => $this->faker->lastName(),
            'Genero' => $this->faker->randomElement(['hombre','mujer']),
            'Celular' => $this->faker->numberBetween(68451296, 79514536),
            'Direccion' => $this->faker->address(),
            
        ];
    }
}
