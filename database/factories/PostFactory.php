<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
final class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->name();
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'photo' => fake()->imageUrl(),
            'body' => fake()->text()
        ];
    }
}
