<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'title_uz' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'title_en' => 'nullable|string',

            'content_uz' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_ru' => 'nullable|string',

            'description_uz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_ru' => 'nullable|string',

            'category_id' => 'nullable|exists:categories,id',
        ];
    }
}
