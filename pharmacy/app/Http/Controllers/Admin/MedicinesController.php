<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Manufacturer;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;



class MedicinesController extends Controller
{

  public function medicines(){
      if (Auth::guard('admin')) {
          $medicines = Medicine::get();
          return view('admin.medicines.medicines')->with(compact('medicines'));
      }

      else{
          return view('admin.admin_login');
      }
  }

 
  public function addEditMedicine(Request $request,$id=null){
      if($id==""){
          $title= "Add Medicine";
          $medicine= new Medicine;
          $medicineData= array();
    } else{
        $title= "Edit Medicine";
        $medicineData = Medicine::find($id);
        $medicineData = json_decode(json_encode($medicineData),true);
        $medicine= Medicine::find($id);
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
                $medicine->medicineImage=$imageName;
            }
        }


        $medicine->manufacturerId=$data['manufacturerId'];
        $medicine->medicineName=$data['medicineName'];
        $medicine->medicineId=$data['medicineId'];
        $medicine->generic=$data['generic'];
        $medicine->type=$data['type'];
        $medicine->quantity=$data['quantity'];
        $medicine->dose=$data['dose'];
        $medicine->medicinePrice=$data['medicinePrice'];
        $medicine->stock=$data['stock'];
        $medicine->description=$data['description'];
        $medicine->save();

        return redirect('./admin/medicines');

    }

        $getManufacturers= Manufacturer::get();
        return view('admin.medicines.add_edit_medicine')->with(compact('title','getManufacturers','medicineData'));
}


    public function deleteMedicine($id){
        Medicine::where('id',$id)->delete();
        return redirect()->back();
    }
}
