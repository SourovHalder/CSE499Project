<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function adminLogin(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
        if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
            return redirect('admin/admin_dashboard');


        } else{
            Session::flash('error_message','Invalid Email or Password');
            return redirect('/admin/login');
        }
      }
      return view('admin.admin_login');
    }

    /**
     * Admin Logout
     *
     * Handles admin logout
     *
     * Returns to admin login page
     * @authenticated
     */
     public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
