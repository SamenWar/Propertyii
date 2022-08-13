<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Haus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Haus>
 */
class HausFactory extends Factory
{
    protected $model = Haus::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //$factory->define(App\User::class, function (Faker $faker) {
        return [

            'name'=>$this->faker->jobTitle(),
            'bathrooms'=>$this->faker->numberBetween($min = 1, $max = 100),
            'badrooms'=>$this->faker->numberBetween($min = 1, $max = 100),
            'Storeys'=>$this->faker->numberBetween($min = 1, $max = 100),
            'garage'=>$this->faker->numberBetween($min = 1, $max = 100),
            'Prise'=>$this->faker->numberBetween($min = 1, $max = 100)

        ];
    }
}
