<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
'title' => $this->faker->sentence, //Generates a fake sentence
'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
'user_id' => \User::factory() //Generates a User from factory and extracts id

        ];
    }
}
