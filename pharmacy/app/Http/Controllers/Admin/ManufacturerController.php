<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;



class ManufacturerController extends Controller
{

    public function manufacturers(){
        $manufacturers = Manufacturer::get();
        return view('admin.manufacturers.manufacturers')->with(compact('manufacturers'));
    }
}
