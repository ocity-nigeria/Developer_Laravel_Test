<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'body',
    ];

    public function category()
    {
        return $this->morphOne(Category::class, 'categorizable');
    }
}
