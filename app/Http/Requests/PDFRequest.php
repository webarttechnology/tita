<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class PDFRequest extends FormRequest
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
            'image' => 'required|mimes:pdf',
            'heading' => 'required|string',
        ];
    }

      /**
     * Get custom error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'heading.string' => 'The Title field must be a string.',  
            'image.required' => 'The PDF field is required.',
            'image.image' => 'The PDF must be an pdf file.',                  
        ];
    }
}
