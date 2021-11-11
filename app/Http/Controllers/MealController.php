<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    //

    public function create(Request $request)
    {
        
       
       
        Meal::create([
            'title' => $request->title,
            'body' => $request->body,
            
            
            ]);
   
         return 'saved';
    }
}
