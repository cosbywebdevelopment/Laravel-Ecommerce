<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition()
    {
        return [
            'id' => random_int(100,500), // unique row ID
            'name' => 'Samsung Phone S' . random_int(10,50),
            'price' => random_int(100,500),
            'quantity' => 1,
            'image' => asset('images/mobile_phone.jpeg'),
            'attributes' => array()
        ];
    }
}
