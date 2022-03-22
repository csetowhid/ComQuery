<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'quiz_id' => [
                'required',
            ],
            'question_name' => [
                'required',
            ],
            'options' => [
                'nullable',
            ],
            'correct_answer' => [
                'nullable',
            ],
            'per_question_mark' => [
                'required',
            ],
            'is_multiple_answers' => [
                'required',
            ],
            'question_type' => [
                'required',
            ],
        ];
    }
}
