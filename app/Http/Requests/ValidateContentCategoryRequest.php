<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContentCategoryRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('content_category');

        return [
            'content_category_name' => 'required|string|max:255',
        ];
    }
}
