<?php

namespace Database\Factories;
use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriFactory extends Factory
{
    protected $model = categori::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name,
        ];
    }
}
