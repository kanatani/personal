<?php

namespace Database\Factories;

use App\Models\chat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class chatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = chat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chatroom' => $this->faker->numberBetween($min = 1, $max = 10),
            'user_id' => $this->faker->randomDigit,
            'reply_id' => $this->faker->randomDigit,
            'message' => Str::random(10),
        ];
    }
}
