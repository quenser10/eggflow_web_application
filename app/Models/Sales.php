<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    public function belongsToUser()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'quantity',
        'size',
        'customer',
        'user_id',
        
    ];
}
