<?php

namespace Database\Factories;

use App\Models\Journalist;
use Illuminate\Database\Eloquent\Factories\Factory;

class JournalistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Journalist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
'name' => $this->faker->name(),
//'description' => Str::random(1000)
'Description' => $this->faker->text()
        ];
    }
}
