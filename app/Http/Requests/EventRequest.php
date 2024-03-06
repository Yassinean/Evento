<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'localisation' => 'required|string|max:255',
            'date' => 'required|date',

            'capacity' => 'required|integer|max:255',
            'categorie_id' => 'required|exists:categories,id',

            'organisateur_id' => 'required|exists:organisateurs,id',


        ];
    }
}