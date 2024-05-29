<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'address',
        'city',
        'maps',
        'rating_avg',
        'rating_count',
    ];

    protected $casts = [
        'rating_avg' => 'float',
    ];

    
}
