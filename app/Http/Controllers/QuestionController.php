<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create()
    {
        return view('questions.admin.create');
    }

    public function store(Request $request)
    {
        $question = new Question;
        $question->question = $request->input('question');
        $question->answer = $request->input('answer');

        $question->save();

        return redirect('/admin/question/index');
    }

    public function edit($questionId)
    {
        $question = Question::findOrFail($questionId);

        return view('questions.admin.edit', compact('question'));
    }

    public function update(Request $request, $questionId)
    {
        $question = Question::findOrFail($questionId);
        $question->question = $request->input('question');
        $question->answer = $request->input('answer');

        $question->save();

        return redirect('/admin/question/index');
    }

    public function index()
    {
        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

    public function adminIndex()
    {
        $questions = Question::all();

        return view('questions.admin.index', compact('questions'));
    }

    public function destroy($questionId)
    {
        $question = Question::findOrFail($questionId);
        $question->delete();
    }
}
