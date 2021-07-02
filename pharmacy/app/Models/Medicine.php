<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Session;


class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'medicineName',
        'manufacturerId',
        'medicineId',
        'generic',
        'type',
        'quantity',
        'dose',
        'medicinePrice',
        'stock',
        'description',
        'medicineImage',
    ];

    // public static function userCartItems2(){
    //     if(Auth::check()){
    //         $userCartItems2 = Medicine::where('medicineId', Auth::user()->id)->get()->toArray();
    //     }else{
    //         $userCartItems2 = Medicine::where('medicineName', Auth::user()->id)->get()->toArray();

    //     }
    //     return $userCartItems2; 
    // }

}
