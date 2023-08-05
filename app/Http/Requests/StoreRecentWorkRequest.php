<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecentWorkRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'min:3'
            ],
            'types' => [
                'required',
                'string',
                'min:3'
            ],
            'thumbnail' => [
                'required',
                'image',
                'mimes:png,jpg',
            ],
            'description' => [
                'required',
                'string',
            ],
            'duration' => [
                'required',
            ],
            'completion_date' => [
                'required'
            ],
            'cover_image' => [
                'image',
                'mimes:png,jpg',
            ],
            'sub_image' => [
                'image',
                'mimes:png,jpg',
            ],
        ];
    }
}
