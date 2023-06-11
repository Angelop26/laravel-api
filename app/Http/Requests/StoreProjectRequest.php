<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title'=>['required',Rule::unique('projects')],
            'content'=> 'nullable',
            'type_id'=> ['nullable', 'exists:types,id'],
            'technologies'=> ['nullable', 'exists:technologies,id']
        ];
    }

    public function messages()
    {
        return[
            'title.required' => "C'è bisogno di un titolo",
            'title.unique' => 'questo titolo è già esistente',
        ];
    }
}
