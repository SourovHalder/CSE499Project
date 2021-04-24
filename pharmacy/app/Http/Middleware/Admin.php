<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
      // if(auth()->guest()){
      //   return redirect('admin');
      // }
      // if(!auth()->user()->admin){
      //   return view('admin/dashboard');
      // }
 
   return $next($request);
}
}
// if(!Auth::guard('admin')->check()){
//   return redirect('admin');
// }

// }
//}
// if($request->session()->has('ADMIN_LOGIN')){  
// }
// else{ 
// Session::flash('error_message','Invalid Email or Password');
//    return redirect('admin');
// }