<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTraining extends Controller
{
    public function index()
    {
        $trainingLaravelafterC_sharp =[
            'I lean twig',
            'I learn c##',
            'C## My next step'
        ]; 

        return view('training_display.index');
           
    }

    public function show() 
    {
        $myArrays = 
            [ 'Apprendre HTML',
              'Apprendre CSS',
              'Apprendre python'
            ];

        //dd($myArrays);
        return 
            view('training_display.training')
            ->with('cafes', $myArrays) ;
    }
}
