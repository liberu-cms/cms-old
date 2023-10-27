<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAuthorRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('author');

        return [ 
            'author_name' => 'required|string|max:255',
            'author_last_name' => 'required|string|max:255',
            'author_email' => 'required|email',
            'author_phone' => 'required|string',
        ];
    }
}
