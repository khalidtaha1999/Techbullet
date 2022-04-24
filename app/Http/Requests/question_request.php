<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class question_request extends FormRequest
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
          'quiz_id'=>'required','title'=>'required','point'=>'required|numeric|min:1|max:100',
          'option_a'=>'required','option_b'=>'required','option_c'=>'required','option_d'=>'required',
            'correct_answer'=>'required'
        ];
    }
}
