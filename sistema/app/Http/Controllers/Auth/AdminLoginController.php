<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    
    public function __construct(){
        $this->middleware('guest:admin');
    }

   public function login(){
   
       return view('auth.admin.login');
   }

   public function Postlogin(Request $request){
    
    
    $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required|min:3',
    ]);

        $credentials = ['email' => $request->email,'password' => $request->password];
        
        if(auth()->guard('admin')->attempt($credentials, $request->remember)){
            return redirect()
            ->intended(url('/admin'));
            
        }else{
            
            return redirect()->back()            
            ->withInput($request->only('email', 'remember'));  

        }
    }

    
}
