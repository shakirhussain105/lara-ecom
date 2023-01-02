<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Samsung S1', 'LG A97', 'OPPO 450', 'Motorolla M58', 'Huawei N5'
            ]),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 1000),
            'category' => 'Mobile',
            'description' => 'Smart phone with 4GB RAM',
            'gallery' => 'https://pixabay.com/photos/iphone-smartphone-apps-apple-inc-410324/',
            'created_at' => $this->faker->dateTimeBetween('2022-12-20', '2022-12-31'),
            'updated_at' => $this->faker->dateTimeBetween('2022-12-20', '2022-12-31'),
        ];
    }
}
