<?php

namespace App\Forms\Builders;

use App\Models\Content;
use LaravelLiberu\Forms\Services\Form;

class ContentForm
{
    protected const TemplatePath = __DIR__ . '/../Templates/content.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Content $content)
    {
        return $this->form->edit($content);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }
}
