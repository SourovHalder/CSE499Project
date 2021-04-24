<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;

class AdminController extends Controller
{
    
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }
    public function dashboard(){
        return view('admin.admin_dashboard');
    }
    public function index(){
        return view('admin.admin_login');
    }
public function auth(Request $request){ 

    $email=$request->post('email');
    $password=$request->post('password');
$result=Admin::where(['email' =>$email, 'password'=> $password])->get();
if(isset($result['0']->id)){
    $request->session()->put('ADMIN_LOGIN',true);
    $request->session()->put('ADMIN_ID',$result['0']->id);
    return redirect('admin/dashboard');
}else{
    Session::flash('error_message','Invalid Email or Password');
    return redirect('admin');
} 

}

 
}
