<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCommentRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        $this->route('comment');

        return [
            'content_id' => 'required|integer|exists:contents,content_id',
            'author_id' => 'required|integer|exists:authors,author_id',
            'comment_body' => 'required',
        ];
    }
}
