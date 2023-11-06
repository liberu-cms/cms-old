<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'content_id' => function () {
               
                return Content::inRandomOrder()->first()->content_id;
            },
            'author_id' => function () {
                return Author::inRandomOrder()->first()->author_id;
            },
            'comment_body' => $this->faker->text(500),
        ];
    }
}
