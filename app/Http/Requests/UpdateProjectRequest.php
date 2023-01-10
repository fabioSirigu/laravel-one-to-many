<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateProjectRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('projects')->ignore($this->project->id),
                'min:5',
                'max:100'
            ],
            'description' => 'nullable|max:255',
            'date' => 'nullable|max:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Non puoi cancellare questo campo, il titolo é obbligatorio',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'description.max' => "L'immagine deve avere massimo :max caratteri",
            'date.max' => 'Il prezzo deve avere massimo :max caratteri'
        ];
    }
}
