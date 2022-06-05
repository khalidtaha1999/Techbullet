<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class slide_create_request extends FormRequest
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
            'name'=>'required','Course_id'=>'required','file' => 'required|mimes:doc,pdf,docx,zip,ppt|max:100000'


        ];
    }
}
