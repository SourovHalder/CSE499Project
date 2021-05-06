<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'session_id',
        'user_id',
        'medicineId',
        'quantity',
        'created_at',
        'updated_at'

    ];
}
