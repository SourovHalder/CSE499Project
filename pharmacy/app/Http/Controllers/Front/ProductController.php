<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Cart;
use Session;
/**
 * @group Product Controller
 *
 * Handle Products
 */
class ProductController extends Controller
{

    public function detail($id){
        $productDetails= Medicine::find($id)->toArray();
        return view('frontend.medicine_detail')->with(compact('productDetails'));
    }

//Changed COnfig/database.php strict -> true to false. its working now

    public function addtocart(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

           //generate season id
           $session_id = Session::get('session_id');
           if(empty($session_id)){
               $session_id = Session::getId();
               Session::put('session_id', $session_id);
           }


        $cart = new Cart;
        $cart->session_id = $session_id;
        $cart->quantity = $data['quantity'];
        $cart->medicineId = $data['medicineId'];
    //     echo "<pre>"; print_r($session_id); die;

        $cart->save();
        $message = "Product has been added to cart";
        session::flash('success_message2',$message);
        return redirect()->back();

    //       $message = "Product has been added to cart";
    //       session::flash('success_message',$message);
    //       return redirect()->back();
    //    }




    }
}


public function search(){
$search_text =$_GET['query'];
$productDetails = Medicine::where('medicineName', 'LIKE', '%'.$search_text.'%')->get();
return view('frontend.search',compact('productDetails'));
}


}
