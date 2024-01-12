<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Models\RecruitersModel;

class RecruiterRequest extends FormRequest
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
            'email'=> "required|string|max:50"
        ];
    }
    public function messages()
    {
        return [
            'email.required' => "Email é um campo requerido.",
            'email.string' => "Email deve ser texto",
            'email.max' => "no maximo 50 caracteres."
        ];
    }
    public function withValidator(Validator $validator)
    {
        $request = (object) $validator->getData();

        $validator->after(function ($validator) use ($request) {
            if (RecruitersModel::where('email', $request->email)->exists()) {
                return $validator->errors()->add('email_existente', 'Esse email já existe na base de dados.');
            }
        });
    }
}
