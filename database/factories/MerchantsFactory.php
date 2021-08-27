<?php

namespace Database\Factories;

use App\Models\Merchants;
use Illuminate\Database\Eloquent\Factories\Factory;

class MerchantsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Merchants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "country_code" => 1,
            "merchant_name" => $this->faker->company(),   
            "created_at" =>now(),   
        ];
    }
}
