<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuizRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('quizzes')->ignore($this->route('quiz')),
                'max:255',
            ],
            'description' => [
                'nullable',
            ],
            'exam_duration' => [
                'required',
                'integer',
            ],
            'url' => [
                'nullable',
                'url',
            ],
        ];
    }
}
