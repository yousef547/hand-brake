<?php

namespace Database\Factories;

use App\Models\year;
use Illuminate\Database\Eloquent\Factories\Factory;

class yearFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = year::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //numberBetween
            'car_id' => $this->faker->numberBetween(1,5),
            'cmodel_id'=> $this->faker->numberBetween(1,20),
            'year' => $this->faker->numberBetween(1970,2021)
        ];
    }
}
