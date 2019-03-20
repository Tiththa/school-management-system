<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Schema;
use DB;


class RegisterController extends Controller
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'department' => 'required',
            'role' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'nic' => 'required|string',
            'admission_no' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'department' => $data['department'],
            'role' => $data['role'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'nic' => $data['nic'],
            'admission_no' => $data['admission_no'],


        ]);
    }
    protected function edit($id)
    {
      return view('student.edit-user-register', ['user'=>User::find($id)]);
    }


    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'department' => $data['department'],
    //         'role' => $data['role'],
    //         'phone_number' => $data['phone_number'],
    //         'address' => $data['address'],
    //         'nic' => $data['nic'],
    //         'admission_no' => $data['admission_no'],
    //
    //
    //     ]);
    // }

    public function showUsers ()
    {
      return view('student.student-index', ['users'=>User::paginate(10)]);
    }



}
