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

    /**
     * Product Details View
     *
     * Returns the view of product details
     * @bodyParam productDetails array required All data of the medicine by id from table
     * @urlParam id number required Id of the medicine
     */
    public function detail($id){
        $productDetails= Medicine::find($id)->toArray();
        return view('frontend.medicine_detail')->with(compact('productDetails'));
    }
    /**
     * Products Added View
     *
     * Returns the view of product details
     * @bodyParam request is requesting for data
     * @bodyParam session_id is getting session_id

     * @bodyParam create Cart object

     * @bodyParam cart.session_id string required session_id of user
     * @bodyParam cart.quantity integer required quantity of product
     * @bodyParam cart.medicineId string required medicineId of medicine
     * @bodyParam message string is a confirmation message
     *
     */


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
   /**
     * Search
     *
     * Returns the view of product details
     * @bodyParam productDetails is requesting for data
     * Returns the view of product details

     */

public function search(){
$search_text =$_GET['query'];
$productDetails = Medicine::where('medicineName', 'LIKE', '%'.$search_text.'%')->get();
return view('frontend.search',compact('productDetails'));
}


}
