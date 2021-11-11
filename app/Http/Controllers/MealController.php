<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class MealController extends Controller
{
    //
    public function create(request $request){

        $meal = Meal::create(['name' => $request->meal_name]);
        $data = $meal->category()->create(['name' => $request->category_name]);
        if($data) {
            return response()->json(['data' => $meal->toArray()], 200);
        }
        else{
            return response()->json(['message'=> 'An Error occured'], 500);
        }
    }
}
