<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContentRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('content');

        return [
            'content_title' => 'required|string|max:255',
            'content_body' => 'required',
            'author_id' => 'required|integer|exists:authors,author_id',
            'published_date' => 'required|date',
            'content_type' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:content_categories,category_id',
            'content_status' => 'required',
            'featured_image_url' => 'required',
        ];
    }
}
