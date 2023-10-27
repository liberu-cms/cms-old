<?php

namespace App\Http\Controllers\ContentCategory\Admin;

use App\Models\ContentCategory;
use App\Http\Controllers\Controller;
use App\Forms\Builders\ContentCategoryForm;

class Create extends Controller
{
    public function __invoke(ContentCategory $contentCategory, ContentCategoryForm $form)
    {
        return ['form' => $form->create()];
    }
    
}
