<?php

namespace App\Http\Controllers\Auth;
use App\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Schema;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest:admin',['except'=>['logout']]);
    }
    public function showLoginForm()
    {
      return view('auth.admin-login');
    }
    public function login(Request $request)
    {
      //validate the form data
      $this->validate($request,[
        'email' => 'required|email',
        'password'=> 'required|min:6'
      ]);
      //attempt to log the user include '

      if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=>$request->password], $request->remember)){
    //if successful redirect to the location
      return redirect()->intended(route('admin.dashboard'));
      }
      //if unsuccessful redirect back to login with the form data
      return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard('admin')->logout();


        return redirect('/');
    }
  

}
