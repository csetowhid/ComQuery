<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Question Create";
        $data['quizes'] = Quiz::all();
        return view('backend.questions.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = Question::create([
            'quiz_id' => $request->quiz_id,
            'question_name' => $request->question_name,
            'options' => $request->options,
            'correct_answer' => $request->correct_answer,
            'per_question_mark' => $request->per_question_mark,
            'is_multiple_answers' => $request->is_multiple_answers,
            'question_type' => $request->question_type,
        ]);


            // $data['quiz_id'] = $request->quiz_id;
            // $data['question_name'] = $request->question_name;
            // $data['options'] = $request->options;
            // $data['correct_answer'] = $request->correct_answer;
            // $data['per_question_mark'] = $request->per_question_mark;
            // $data['is_multiple_answers'] = $request->is_multiple_answers;
            // $data['question_type'] = $request->question_type;

            // dd($data);
     

        // if (!empty($question)) {
        //     notify()->success('Question Has Been Created Successfully!');
        //     return redirect()->route('questions.index');
        // }

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
