<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'cover' => 'https://picsum.photos/500',
            'excerpt' => $this->faker->text(200),
            'text' => $this->faker->paragraph(6,true),
            'status' => $this->faker->randomElement(['draft', 'publish', 'private', 'archive']),
            'user_id' => 1,
            'category_id' => $this->faker->randomElement([1,2,3]),
            'date_publish' => null,
            'date_expire' => null,
            'created_at' => now(),
        ];
    }
}
