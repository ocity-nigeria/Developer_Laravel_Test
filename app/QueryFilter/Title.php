<?php

namespace App\QueryFilter;

class Title
{
    public function handle($query, $next)
    {        
        if (request()->title) {           
           $query->where('title', request()->title);      
        }         
        
        return $next($query);  
    }
 
 
}
?>