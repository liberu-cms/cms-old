<?php

namespace App\Http\Controllers\Tag\Admin;

use App\Forms\Builders\TagForm;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class Edit extends Controller
{
    public function __invoke(Tag $tag, TagForm $form)
    {
        return ['form' => $form->edit($tag)];
    }
    
}
