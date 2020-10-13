<?php

namespace App\Posts\Domain\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'content' => 'required',
            'category_id' => 'required'
        ];
    }
    public function messages(){
        return [
            'content.required' => 'content is required',
            'category_id.required' => 'category required'
        ];
    }
}
