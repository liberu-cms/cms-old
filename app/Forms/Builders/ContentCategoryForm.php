<?php

namespace App\Forms\Builders;

use App\Models\ContentCategory;
use LaravelLiberu\Forms\Services\Form;

class ContentCategoryForm
{
    protected const TemplatePath = __DIR__.'/../Templates/content_category.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(ContentCategory $contentCategory)
    {
        return $this->form->edit($contentCategory);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }

   
}
