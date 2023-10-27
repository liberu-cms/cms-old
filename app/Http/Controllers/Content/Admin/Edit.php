<?php

namespace App\Http\Controllers\Content\Admin;

use App\Forms\Builders\ContentForm;
use App\Http\Controllers\Controller;
use App\Models\Content;

class Edit extends Controller
{
    public function __invoke(Content $content, ContentForm $form)
    {
        return ['form' => $form->edit($content)];
    }
    
}
