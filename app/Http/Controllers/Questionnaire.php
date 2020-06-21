<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Questionnaire extends Controller
{
    public function create()
    {
        return view('questionnaire.create');
    }
    
    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'purpose' => 'required',
    ]);

    //$data['user_id']=auth()->user()->id;

    //$questionnaire=\App\Questionnaire::create(data);

    $questionnaire =auth()->user()->questionnairees()->create($data);
    
    
    return redirect('/questionnaires/'.$questionnaire->id);
}

public function show(\App\Questionnaire $questionnaire)
{
  return view('questionnaire.show',compact('questionnaire'));
}

}
