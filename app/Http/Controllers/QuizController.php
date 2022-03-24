<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:Quiz List|Quiz Create|Quiz Edit|Quiz Delete', ['only' => ['index','show']]);
         $this->middleware('permission:Quiz Create', ['only' => ['create','store']]);
         $this->middleware('permission:Quiz Edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Quiz Delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Quizs";
        $data['quizs'] = Quiz::all();
        return view('backend.quiz.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Quiz Create";
        return view('backend.quiz.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuizRequest $request)
    {
        $quiz = Quiz::create([
            'title' => $request->title,
            'description' => $request->description,
            'exam_duration' => $request->exam_duration,
            'url' => $request->url,
        ]);

        if (!empty($quiz)) {
            notify()->success('Quiz Has Been Created Successfully!');
            return redirect()->route('quiz.index');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        $data['title'] = "Quiz Edit";
        $data['quiz'] = $quiz;
        return view('backend.quiz.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizRequest  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(QuizRequest $request, $id)
    {
        $quiz = Quiz::where('id',$id)->first();
        $quiz->title = $request->title;
        $quiz->description = $request->description;
        $quiz->exam_duration = $request->exam_duration;
        $quiz->url = $request->url;

        if($quiz->update()){
            notify()->success('Quiz Has Been Updated Successfully!');
            return redirect()->route("quiz.index");
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
