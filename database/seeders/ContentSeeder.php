<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    
    public function run()
    {
        Content::factory(20)->create();
    }
}
