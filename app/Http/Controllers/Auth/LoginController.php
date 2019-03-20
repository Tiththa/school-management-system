<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     public function redirectTo(){
      // Code here
      $role = Auth::user()->role;

      switch ($role) {
        case 'Admin':
                return '/admin';
            break;
         case 'Teacher':
                 return '/users';
             break;
         case 'Librarian':
                 return '/library';
             break;
         case 'Alumni':
                 return '/alumni';
             break;
         case 'Accountant':
                     return '/accounts';
                 break;
         case 'Student':
               return '/student';
             break;


         default:
                 return '/login';
             break;
     }
   }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
