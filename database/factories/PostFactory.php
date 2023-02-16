<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->words(mt_rand(3,5),true),
            'slug'=>fake()->slug(),
            'excerpt'=>fake()->paragraph(),
            'body'=>fake()->paragraphs(mt_rand(5,10),true),
            'user_id'=>mt_rand(1,3),
            'category_id'=>mt_rand(1,3)
        ];
    }
}
