<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eggs extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'size',
        
    ];
}
