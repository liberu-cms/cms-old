<?php

namespace App\Tables\Builders;

use App\Models\ContentCategory;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class ContentCategoryTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/content_category.json';

    public function query(): Builder
    {
        return ContentCategory::selectRaw('
                    content_categories.content_category_id, 
                    content_categories.content_category_name
                ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
