<?php

namespace Database\Factories;

use App\Models\car;
use Illuminate\Database\Eloquent\Factories\Factory;

class carFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=> $this->faker->word(),
        ];
    }
}
