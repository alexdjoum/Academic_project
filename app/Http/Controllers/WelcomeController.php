<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    function index() {
        $name= "Je m'appelle kammegne";
        $date = date('Y-m-d');
        $mytable= [
            'My name is Boris',
            'My name is Richard',
            'My name is Adeline'
        ];
        return view('welcome.index', compact('name', 'date'));
    }

    public function testdatabase() {
        return view('hello');
    }
}
