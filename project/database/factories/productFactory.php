<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i = 0;
        $i++;
        return [
            'car_id' => $this->faker->numberBetween(1,5),
            'cmodel_id'=>  $this->faker->numberBetween(1,20),
            'year_id'=> $this->faker->numberBetween(1,60),
            'name_product' =>$this->faker->word(),
            'price' => $this->faker->numberBetween(100,500),
            'discount'=>$this->faker->numberBetween(50,100),
            'photo' => "products/$i.png",
            'count' => $this->faker->numberBetween(0,500),
        ];
    }
}
