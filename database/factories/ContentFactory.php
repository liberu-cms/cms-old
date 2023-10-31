<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Content;
use App\Models\ContentCategory;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContentFactory extends Factory
{
    protected $model = Content::class;

    public function definition(): array
    {
        
        return [
            'content_title' => $this->faker->name,
            'content_body' => $this->faker->text(500),
            'content_category_id' => function () {
                return ContentCategory::inRandomOrder()->first()->content_category_id;
            },
            'content_author_id' => function () {
                return Author::inRandomOrder()->first()->author_id;
            },
            'published_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'content_type' => $this->faker->randomElement(['article', 'video']),
            'content_status' => $this->faker->randomElement(['draft', 'published']),
            'featured_image_url' => $this->faker->imageUrl(800, 600, 'cats', true, 'Faker', true),

        ];
    }
}
