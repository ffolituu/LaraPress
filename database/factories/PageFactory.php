<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

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
            'text' => $this->faker->paragraph(6,true),
            'status' => $this->faker->randomElement(['draft', 'publish', 'private', 'archive']),
            'user_id' => 1,
            'created_at' => now(),
        ];
    }
}
