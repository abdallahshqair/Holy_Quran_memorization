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
            'title' =>$this->faker->sentence,
            'body' =>$this->faker->text,
//            'feature_image' => 'posts/feature_images/img.jpg',
            'large_image' => 'posts/large_image/img.jpg',
            'author_email' => $this->faker->email,

        ];
    }
}
