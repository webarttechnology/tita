<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'category' => 'required|string',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
            'heading' => 'required|string',
            'description' => 'required|string',
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
            'heading.required' => 'The Title field is required.',
            'heading.string' => 'The Title field must be a string.',  
            'image.required' => 'The Image field is required.',
            'image.image' => 'The Image field must be an image of type: jpeg, png, jpg.',                  
        ];
    }
}
