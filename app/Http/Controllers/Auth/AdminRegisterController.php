<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Schema;
use DB;

class AdminRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */



    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     public function __construct()
     {
       $this->middleware('auth:admin');
     }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     public function index()
     {
         return view('auth.admin-register');
     }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Admin
     */
    protected function create()
    {
        $admin = new Admin;
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->password = Hash::make('password');
        $admin->job_title = request('job_title');
        $admin->save();


        return redirect()->route('admin.login');
    }



}
