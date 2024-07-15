<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    public function belongsToUser()
    {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
        'product',
        'quantity',
        'total_price',
        'user',
        
    ];
}
