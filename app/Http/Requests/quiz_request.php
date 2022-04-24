<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class quiz_request extends FormRequest
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
            'name'=>'required','Course-id'=>'required','Points'=>'required|numeric|min:1|max:100'

        ];
    }
}
