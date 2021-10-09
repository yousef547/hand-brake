<?php

namespace Database\Factories;

use App\Models\cmodel;
use Illuminate\Database\Eloquent\Factories\Factory;

class cmodelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cmodel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_id' => $this->faker->numberBetween(1,5),
            'model' => $this->faker->word(),
        ];
    }
}
