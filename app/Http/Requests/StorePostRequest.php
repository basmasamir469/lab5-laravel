<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required',Rule::unique('posts')->ignore($this->post),'min:3'],
            'description' => 'required',
        ];
    }

    public function messages()
{
    return [
        'title.required' => 'A title is required',
        'description.required' => 'A message is required',
    ];
}
}
