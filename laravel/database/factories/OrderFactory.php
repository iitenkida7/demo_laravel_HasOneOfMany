<?php

namespace Database\Factories;

use App\Models\Order;
use \App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>  User::all()->random()->id,
            'price' => $this->faker->numberBetween(1000,10000),
            'paid_at' => $this->faker->randomElement([now(), null]),

        ];
    }
}

