<?php

namespace App\Tables\Builders;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class TagTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/tag.json';

    public function query(): Builder
    {
        return Tag::selectRaw('
                        tags.tag_id, tags.tag_name
                        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
