<?php

namespace Database\Factories;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class TravelFactory extends Factory
{
    protected $model = Travel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imagePath = 'images/destination.jpeg';
        return [
            'image' => $imagePath,
            'title' => $this->faker->sentence,
            'location' => $this->faker->city,
            'content' => $this->faker->paragraph,
            'user_id' => User::factory()->create()->id, 
        ];
    }
}
