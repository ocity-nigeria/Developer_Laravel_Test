<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\MealRequestJob;
use App\Actions\NotifyAdminAction;

class MealAgregatorAPIController extends Controller
{
    public function receiveWebHook(Request $request)
    {
        for ($i=0; $i < $request->count ; $i++) { 
            
            #   MealRequestJob contain the rest logic
             
            MealRequestJob::dispatch($request->count, $i);
          
        }
    }
}
