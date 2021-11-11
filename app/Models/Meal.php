<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',

      
        
    ];
    public function categories()
    {
        return $this->morphMany('App\Models\Category', 'morpcategories');
    }
}
