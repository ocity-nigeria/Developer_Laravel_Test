<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;



class BlogController extends Controller
{
    
    //

    public function search()
    {

        $query = Blog::query();
        // $query = Posts::query();
        $posts = app(Pipeline::class)
						-> send($query)
						->through([
							\App\QueryFilter\Title::class,
							])
						->thenReturn();
		
        dd($posts->get());
    }
     

    
}
