<?php
 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Session;




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
    public static function userCartItems(){
        if(Auth::check()){
            $userCartItems = Cart::with('Medicine')->where('medicineId', Auth::user()->id)->get()->toArray();
        }else{
            $userCartItems = Cart::with('Medicine')->where('session_id', Session::get('session_id'))->get()->toArray();

        }
        return $userCartItems; 
    }
    public function product(){
        return $this->belongsTo('App\Medicine','medicineId');
    }
}
