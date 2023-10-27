<?php

namespace App\Tables\Builders;

use App\Models\Content;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class ContentTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/content.json';

    public function query(): Builder
    {
        return Content::selectRaw('
                        contents.content_id, contents.content_title, contents.content_body, 
                        contents.content_category_id, contents.author_id,
                        contents.published_date, contents.content_type, 
                        contents.content_status, contents.featured_image_url,
                    ');
    }
    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
