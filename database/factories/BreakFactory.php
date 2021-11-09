<?php

namespace Database\Factories;

use App\Models\Break;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreakFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Break::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomNumber(),
            'work_id' => \App\Models\Work::factory(),
            'start_break' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'end_break' => $this->faker->time($format = 'H:i:s', $max = 'now'),
        ];
    }
}