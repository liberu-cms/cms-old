<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;


class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition(): array
    {
        return [
            
            'author_name' => $this->faker->name,
            'author_last_name' => $this->faker->lastName,
            'author_email' => $this->faker->unique()->safeEmail,
            'author_phone' => $this->faker->phoneNumber,
        ];
    }
}
