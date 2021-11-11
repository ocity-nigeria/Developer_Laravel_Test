<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use App\Models\Blog;

class BlogController extends Controller
{
    
    public function search(Request $request)
    {
        $query = Blog::query();
        $posts = app(Pipeline::class)
						->send($query)
						->through([
							\App\QueryFilters\Title::class,
							])
						->thenReturn()->get();
		
        //dd($posts->get());

        if($posts->count() > 0) {
            return response()->json(["data" => $posts]);
        }
        else {
            return response()->json(["data" => "Sorry no record found for this search"]);
        }
    }
}
