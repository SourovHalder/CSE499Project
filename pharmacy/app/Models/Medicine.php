<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'medicineName',
        'manufacturerId',
        'generic',
        'type',
        'quantity',
        'dose',
        'medicinePrice',
        'stock',
        'description',
        'medicineImage',
    ];
}
