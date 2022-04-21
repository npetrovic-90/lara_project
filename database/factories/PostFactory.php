<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array
     */
    //use php artisan tinker
    //\App\Models\ModelName::factory()->create() - 1 row
    //\App\Models\ModelName::factory()->count(x)->create() - x rows

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            'created_at' => now(),


        ];
    }
}
