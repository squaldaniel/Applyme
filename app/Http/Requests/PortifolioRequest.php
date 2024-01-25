<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortifolioRequest extends FormRequest
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
            "projectname" => "required",
            "projectdescricion" => "required",
            "projectphoto" => "required|image|mimes:jpeg,png,jpg,gif",
        ];
    }
    public function messages()
    {
        return [
            "projectname.required" => "O nome do Projeto é Obrigatório.",
            "projectdescricion.required" => "Um breve descrição é obrigatória.",
            "projectphoto.required" => "Uma Imagem do projeto é necessária.",
            "projectphoto.image" => "Precisa ser um arquivo de imagem",
            "projectphoto.mimes"=> "a imagem precisa ser do tipo: jpeg,png,jpg,gif"

        ];
    }
}
