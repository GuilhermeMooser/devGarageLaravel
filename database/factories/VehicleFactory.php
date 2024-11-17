<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'year' => $this->faker->year,
            'model' => $this->faker->word,
            'mark' => $this->faker->company,
            'photo' => $this->faker->imageUrl(640, 480, 'transport', true),
            'characteristics' => $this->faker->text(100),
            'type' => $this->faker->randomElement([Vehicle::TYPE_CAR, Vehicle::TYPE_MOTORCYCLE]),
            'price' => $this->faker->randomFloat(2, 10000, 50000),
            'user_id' => User::factory(),
        ];
    }
}
