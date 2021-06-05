<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AutoCart;
use Session;
class OrderController extends Controller
{
   public function autodetail($id){
    $productDetails2= AutoCart::find($id)->toArray();
    return view('frontend.autodetails')->with(compact('productDetails2'));
}
// public function autocart(Request $request){
//     if($request->isMethod('post')){
//         $data = $request->all();
//         echo "<pre>" ; print_r($data);
// }
// }}
public function autocart(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
        $autocart = new AutoCart;

       //generate season id
       $session_id = Session::get('session_id');
       if(empty($session_id)){
           $session_id = Session::getId();
           Session::put('session_id', $session_id);
       }
      
       if($request->isMethod('post')){
        $data= $request->all();
        if($request->hasFile('medicineImage')){
            $image_tmp=$request->file('medicineImage');
            if($image_tmp->isValid()){
                $image_name=$image_tmp->getClientOriginalName();
                $extension= $image_tmp->getClientOriginalExtension();
                $imageName= $image_name.'-'.rand(111,999999).'.'.$extension;
                $image_path='images/medicine_images/'.$imageName;
                Image::make($image_tmp)->resize(200,231)->save($image_path);
                $autocart->medicineImage=$imageName;
            }
        }
            
            $autocart->session_id = $session_id;
            $autocart->money_amount = $data['money_amount'];
            $autocart->days = $data['days'];

//     echo "<pre>"; print_r($session_id); die;

    $autocart->save();
    $message = "Product has been added to cart";
    session::flash('success_message2',$message);
    return redirect()->back();

}
}
}

}
