<?php

namespace App\Http\Requests\BlogPost;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'file' => ['sometimes', 'image', 'max:1024'], //1mb
            'text' => ['required', 'string', 'max:100000'],
            'blog_post_category_id' => ['sometimes', 'numeric', 'exists:blog_post_categories,id']
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()->all()], 422));
    }
}
