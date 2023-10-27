<?php

namespace App\Tables\Builders;

use App\Models\Author;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class AuthorTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/author.json';

    public function query(): Builder
    {

        return Author::selectRaw('
                authors.author_id, authors.author_name, 
                authors.author_last_name, authors.author_email, authors.author_phone
            ');
    }


    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
