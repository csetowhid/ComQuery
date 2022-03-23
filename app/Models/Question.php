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

    
    protected $casts = [
        'options' => 'array',
        'correct_answer' => 'array',
    ];
    
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

}
