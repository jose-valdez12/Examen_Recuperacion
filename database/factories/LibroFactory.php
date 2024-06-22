<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Libro::class;
    public function definition()
    {
        return [
            'titulo'=>$this->faker->name,
            'anio_publicacion'=>$this->faker->text,
            'autor'=>$this->faker->name,
            'clasificacion'=>$this->faker->text,
            'cantidad_paginas'=>$this->faker->text,
        ];
    }
}
