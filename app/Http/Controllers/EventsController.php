<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function show($id)
    {
        dd($id);
    }

    public function category($category, $subcategory)
    {
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
