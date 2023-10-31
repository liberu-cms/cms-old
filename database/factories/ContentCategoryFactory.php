<?php

namespace Database\Factories;

use App\Models\ContentCategory;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContentCategoryFactory extends Factory
{
   protected $model = ContentCategory::class;

    public function definition(): array
    {
        return [
                
            'content_category_name' => $this->faker->name,
        ];
    }
}
