<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'category_id' =>$this->faker->numberBetween(1, 2),
            'price' =>$this->faker->randomFloat(2, 1000, 100000),
            'description' =>$this->faker->text(),
            'img' =>fake()->randomElement(
                [
                    'https://media.istockphoto.com/id/1302143931/id/foto/sup-ramen-di-atas-meja-kayu-pedesaan.jpg?s=2048x2048&w=is&k=20&c=WK0a1dVEFfhbF898DccQGpTZPXmoWg0ymXeP5jjrlEg=',
                    'https://plus.unsplash.com/premium_photo-1668146927669-f2edf6e86f6f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://media.istockphoto.com/id/1555947107/id/foto/set-sushi-dan-maki.jpg?s=2048x2048&w=is&k=20&c=NfruJqcbV7UTBjha2VseuzfN3Vh8d6gO8G3TLzXkFds=',
                ]
            ),
            'is_active' =>$this->faker->boolean(),
        ];
    }
}
