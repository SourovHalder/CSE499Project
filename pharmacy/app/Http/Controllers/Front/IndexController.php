<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;



class IndexController extends Controller
{

    public function welcome(){
        $newMedicines= Medicine::orderBy('id','Desc')->limit(4)->get()->toArray();
        $newMedicines = json_decode(json_encode($newMedicines),true);
        $newMedicines2= Medicine::orderBy('id')->limit(4)->get()->toArray();
        $newMedicines2 = json_decode(json_encode($newMedicines2),true);
        // echo "<pre>"; print_r($newMedicines);die;
        $page_name="welcome";
        return view('welcome')->with(compact('page_name','newMedicines','newMedicines2'));
    }

    // public function welcome2(){
    //     $nm = Medicine::orderBy('id','asc')->limit(4)->get()->toArray();
    //     $nm = json_decode(json_encode($nm),true);
    //     // echo "<pre>"; print_r($newMedicines);die;
    //     $page_name="welcome";
    //     return view('welcome')->with(compact('page_name','nm'));
    // }
}
