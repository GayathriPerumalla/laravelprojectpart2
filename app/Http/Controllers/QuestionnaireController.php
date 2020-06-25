<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionnaireController extends Controller
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
     $questionnaire=new Questionnaire([
         'title'=>$request->get('title'),
         'purpose'=>$request->get('purpose'),

     ]);
     $questionnaire->save();

     
    //$data['user_id']=auth()->user[(id)];

    //$vdata=\App\Questionnaire::create(data);

    //$vdata =auth()->user()->questionnaires()->create($data);
    
    
    return redirect('/questionnaires/'.$questionnaire->id);
}

public function show(\App\Questionnaire $questionnaire)
{
  return view('questionnaire.show',compact('questionnaire'));
}

}
