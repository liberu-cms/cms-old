<?php

namespace App\Forms\Builders;

use App\Models\Tag;
use LaravelLiberu\Forms\Services\Form;

class TagForm
{
    protected const TemplatePath = __DIR__.'/../Templates/tag.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Tag $tag)
    {
        return $this->form->edit($tag);
    }

    public function TemplatePath()
    {
        return $this->form = new Form(static::TemplatePath);
    }

   
}
