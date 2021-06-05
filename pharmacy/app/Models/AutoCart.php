<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoCart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'session_id',
        'user_id',
        'days',
        'money_amount',
        'medicineImage',
        'created_at',
        'updated_at'

    ];
}
