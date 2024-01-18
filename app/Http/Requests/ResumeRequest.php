<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
        $requestRaw='';
        switch(request()->all('partresume'))
        {
            case 'photo':
            $requestRaw = [
                'photo'=>"required|string"
            ];
            break;
            case 'info' :
                $requestRaw = [
                    'aboutme'=>"required|string",
                    'positions'=>"required|string",
                ];
            break;
        }
        return [$requestRaw];
    }
    public function messages()
    {
        return [
            'aboutme.required' => "O sobre mim, é necessário.",
        ];
    }
}
