<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question_name',
        'options',
        'correct_answer',
        'per_question_mark',
        'is_multiple_answers',
        'question_type',
    ];

    public function quizes()
    {
        return $this->hasMany(Quiz::class, 'quiz_id');
    }

    protected $casts = [
        'options' => 'array',
        'correct_answer' => 'array',
    ];


}
