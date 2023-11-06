<?php

namespace Database\Seeders;

use App\Models\ContentCategory;
use Illuminate\Database\Seeder;

class ContentCategorySeeder extends Seeder
{
    
    public function run()
    {
        ContentCategory::factory(10)->create();
    }
}
