<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Payroll;
use App\Role;
use App\Department;
use App\Employee;
use Gate;

use Session;


class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // if(!Gate::allows('isTeacher')){
      //   abort(404,"Sorry,You cannot do these actions");
      // }
      return view('home');


    }



}
