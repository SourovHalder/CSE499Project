<?php
 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Medicine;




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
            $userCartItems = Cart::with('medicine')->where('medicineId', Auth::user()->id)->get()->toArray();
        }else{
            $userCartItems = Cart::with('medicine')->where('session_id', Session::get('session_id'))->get()->toArray();

        }
        return $userCartItems; 
    }
    public function medicine(){
        return $this->belongsTo('App\Models\Medicine','medicineId');
    }
    // public static function getMedicineAttrPrice($medicineId,$quantity ){
    // $attrPrice = Medicine::select('medicinePrice')->where(['medicineId'=>$medicineId,'quantity'=>$quantity])->first()->toArray();
    // return $attrPrice['medicinePrice'];
    // }
}
