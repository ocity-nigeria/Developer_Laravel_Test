<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
    ];

    public function category()
    {
        return $this->morphOne(Category::class, 'categorizable');
    }
}
