<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'video_link' => 'required|url',
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
            'video_link.required' => 'The Video Link field is required.',
            'video_link.url' => 'The Video Link field must be a link.',  
            'heading.required' => 'The Title field is required.',  
                            
        ];
    }
}
