<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use App\Models\lookups\Country;
use App\Models\lookups\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->text(500),
            'category_id' => Category::all()->random()->id,
            'country_id' => Country::all()->random()->id,
            'deadline' => $this->faker->dateTime(),
            'organizer' => $this->faker->company(),
            'created_by' => User::all()->random()->id,
        ];
    }
}