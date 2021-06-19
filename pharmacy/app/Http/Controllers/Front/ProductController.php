<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Cart;
use App\Models\AutoCart;
use Illuminate\Support\Facades\Auth;
use Session;

use Intervention\Image\ImageManagerStatic as Image;
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
               session::put('session_id', $session_id);
           }
           if(Auth::check()){
               $countProducts =Cart::where(['medicinId'=>$data['medicineId'],'user_id' =>Auth::user()->id])->count();
           } else{
            $countProducts =Cart::where(['medicinId'=>$data['medicineId'],'user_id' =>Auth::user()->id])->count();
           }
           if($countProducts>0){
               $message="Product already exists in the Cart";
               $request->session()->flash('error_message', $message);
               return redirect()->back();
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

public function cart(){
    return view('frontend.cart');

}

public function search(){
    $search_text =$_GET['query'];
    $productDetails = Medicine::where('medicineName', 'LIKE', '%'.$search_text.'%')->get();
    return view('frontend.search',compact('productDetails'));
    }



}


// //AUTOORDER PROCESSING
// public function autodetail($id){
//     $productDetails2= AutoCart::find($id)->toArray();
//     return view('frontend.autodetails')->with(compact('productDetails2'));
// }

// public function autocart(Request $request){
//     if($request->isMethod('post')){
//         $data = $request->all();
//         $autocart = new AutoCart;

//        //generate season id
//        $session_id = Session::get('session_id');
//        if(empty($session_id)){
//            $session_id = Session::getId();
//            Session::put('session_id', $session_id);
//        }
      
//        if($request->isMethod('post')){
//         $data= $request->all();
//         if($request->hasFile('medicineImage')){
//             $image_tmp=$request->file('medicineImage');
//             if($image_tmp->isValid()){
//                 $image_name=$image_tmp->getClientOriginalName();
//                 $extension= $image_tmp->getClientOriginalExtension();
//                 $imageName= $image_name.'-'.rand(111,999999).'.'.$extension;
//                 $image_path='images/medicine_images/'.$imageName;
//                 Image::make($image_tmp)->resize(200,231)->save($image_path);
//                 $autocart->medicineImage=$imageName;
//             }
//         }
            
//             $autocart->session_id = $session_id;
//             $autocart->money_amount = $data['money_amount'];
//             $autocart->days = $data['days'];

// //     echo "<pre>"; print_r($session_id); die;

//     $autocart->save();
//     $message = "Product has been added to cart";
//     session::flash('success_message2',$message);
//     return redirect()->back();

// }
// }
// }
