<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePokemonRequest extends FormRequest
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
            "image" => ['image', 'max:2048', Rule::unique("pokemon", "image")->ignore($this->pokemon), 'required'],
            "total" => ['required'],
            "hp" => ['required'],
            "attack" => ['required'],
            "defense" => ['required'],
            "sp_atk" => ['required'],
            "sp_def" => ['required'],
            "speed" => ['required'],
            "generation_id" => ['required', "exists:generations,id"],
        ];
    }
}
