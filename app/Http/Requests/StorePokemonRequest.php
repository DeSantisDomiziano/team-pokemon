<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['required'],
            "total" => ['required'],
            "hp" => ['required'],
            "attack" => ['required'],
            "defense" => ['required'],
            "sp_atk" => ['required'],
            "sp_def" => ['required'],
            "speed" => ['required'],
            "generation" => ['required'],
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
}
