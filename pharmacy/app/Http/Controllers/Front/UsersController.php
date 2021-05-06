<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session as FacadesSession;

use Session;



/**
 * @group Users Controller
 *
 * Handle Products
 */


class UsersController extends Controller
{
    /**
     * Login Page View
     *
     * Returns the view of login page
     */
    public function loginPage(){
        return view ("auth.newLogin");
    }

    /**
     * Registration Page View
     *
     * Returns the view of registration page
     */
    public function registrationPage(){
      return view ("auth.newRegister");
    }


    /**
     * Handles User Registration
     *
     * Returns to homepage
     * @bodyParam data array required Data of the registration form
     * @bodyParam emailCount number required number of emails in table same as input
     * @bodyParam userCount number required number of userNames in table same as input
     * @bodyParam message string Error Message
     * @bodyParam user object
     * @bodyParam user.firstName string required First name of user
     * @bodyParam user.lastName string required Last name of user
     * @bodyParam user.userName string required Username of user
     * @bodyParam user.email email required Email of user
     * @bodyParam user.gender string required Gender of user
     * @bodyParam user.age number required Age of user
     * @bodyParam user.address string required Address of user
     * @bodyParam user.phone number required Phone number of user
     * @bodyParam user.password password required Password of user
     */
    public function registerUser(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            $emailCount=User::where('email',$data['email'])->count();
            $userCount=User::where('userName',$data['userName'])->count();
            if($emailCount>0){
                $message="Email already exists!";
                session::flash('error_message',$message);
                return redirect()->back();
            } elseif($userCount>0){
                $message="Username already exists!";
                session::flash('error_message',$message);
                return redirect()->back();
            } else{
                $user= new User;
                $user->firstName = $data['firstName'];
                $user->lastName = $data['lastName'];
                $user->userName = $data['userName'];
                $user->email = $data['email'];
                $user->gender = $data['gender'];
                $user->age = $data['age'];
                $user->address = $data['address'];
                $user->phone = $data['phone'];
                $user->password = bcrypt($data['password']);
                $user->save();

                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    return redirect('/');
                }
            }
        }
    }



    /**
     * User Login
     *
     * Handles user login
     * @bodyParam data array required Data from Login Form
     * @bodyParam data.email email required Email of user
     * @bodyParam data.password password required Password of user
     */
     public function loginUser(Request $request){
         if($request->isMethod('post')){
             $data=$request->all();

         if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
             return redirect("/");
         } else{
             $message="Invalid Email or Password";
             Session::flash('error_message',$message);
             return redirect()->back();
            }
        }
    }




    /**
     * User Logout
     *
     * Handles user logout
     *
     * Returns the homepage
     */
    public function logout(){
        Auth::logout();
        return redirect ("/");
    }
    /**
     * Update User Account
     *
     * @bodyparam requires id from user
    * @bodyParam data array required Data from Login Form
     * @bodyParam userDetails.user_id required  of user
     * @bodyParam user.firstName required firstName of user
     * @bodyParam user.lastName string required Last name of user
    
     * @bodyParam user.email email required Email of user
   
     * @bodyParam user.age number required Age of user
     * @bodyParam user.address string required Address of user
     * @bodyParam user.phone number required Phone number of user
    *
     */

    public function account(Request $request){
   $user_id=Auth::user()->id;
     $userDetails= User::find($user_id)->toArray();
     $userDetails=json_decode(json_encode($userDetails),true);

     if($request->isMethod('post')){
       $data =$request->all();

       $user = User::find($user_id);
       $user->firstname =$data['firstName'];
       $user->lastName =$data['lastName'];
       $user->userName =$data['userName'];
       $user->email =$data['email'];
       $user->age =$data['age'];
       $user->address =$data['address'];
       $user->phone =$data['phone'];
       $user->save();

       $message="your account has been updated successfully ! ";
     Session::put('success_message',$message);;
     Session::forget('error_message');
     return redirect()->back();


    }

      return view('frontend.account')->with(compact('userDetails'));
    }

    public function autoorder(){
        return view('frontend.autoorder');
    }

}
