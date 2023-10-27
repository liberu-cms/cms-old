<?php

namespace App\Http\Controllers\Content\Admin;

use App\Forms\Builders\ContentForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    
    public function __invoke(ContentForm $form)
    {
        return ['form' => $form->create()];
    }
}
