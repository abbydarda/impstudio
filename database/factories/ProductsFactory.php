<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Merchants;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->numerify('Barang ###'),
            "price" => $this->faker->numberBetween($min = 50000, $max = 200000),   
            "status" => $this->faker->numberBetween($min = 0, $max = 1),   
            "created_at" => now(),   
        ];
    }
}
