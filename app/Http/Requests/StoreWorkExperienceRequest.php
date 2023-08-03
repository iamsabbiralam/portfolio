<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkExperienceRequest extends FormRequest
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
            'start_date' => [
                'required',
                'string',
                'min:3'
            ],
            'end_date' => [
                'required',
                'string',
                'min:3'
            ],
            'logo' => [
                'nullable',
                'image',
                'mimes:png,jpg',
            ],
            'designation' => [
                'required',
                'string',
            ],
            'company_name' => [
                'required',
            ],
            'city_name' => [
                'required'
            ],
            'website' => [
                'required'
            ],
        ];
    }
}
