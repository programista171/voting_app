<?php

namespace Database\Factories;

use App\Models\Voter;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
'Address' => mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255),
        ];
    }
}
