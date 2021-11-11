<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'categorizable_id',
        'categorizable_type',
    ];

    public function categorizable()
    {
        return $this->morphTo();
    }
}
