<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_uz' => 'required|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',

            'content_uz' => 'required|string', 
            'content_en' => 'nullable|string',
            'content_ru' => 'nullable|string',

            'description_uz' => 'required|string',
            'description_en' => 'nullable|string',
            'description_ru' => 'nullable|string',

            'category_id' => 'required|exists:categories,id',
        ];
    }
}