<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index()
    {
        $events =[
            'I lean Laravel',
            'I learn Symphony',
            'i learn JAVA ANDROID'
        ]; 

        return view('events.index')
            ->with('events', $events);
    }

    public function show($id)
    {
        //dd($id);
        $data = [
            'name' => "Je m'apelle Djoum",
            'date' => date('Y-m-d'),
            'id' => 17
        ];
        return view('events.show')
            ->with($data);
        return view('events.show')
            ->with('id', $id)
            ->with('name', 'Laravel hacking and coffe');
    }

    public function category($category, $subcategory)
    {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
