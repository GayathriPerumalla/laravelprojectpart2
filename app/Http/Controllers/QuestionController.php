<?php

namespace App\Http\Controllers;
use App\Questionnaire;

use Illuminate\Http\Request;
class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
    return view('question.create');
    }

    public function store(Request $request,Questionnaire $questionnaire)
    {
        //dd($request->all());
        $data = $request->validate([
            'questions.question' => 'required',
            'answers.*.answer' => 'required',
        ]);
        //DB::table('questions')->insert($data[question]);
        $question=$questionnaire->question()->create($data['question']);
        $question->answers()->createMany($data['answers']);
        return redirect('/questionnaire/'.$questionnaire->id);

        
    }
}

