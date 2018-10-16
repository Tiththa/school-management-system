<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Payroll;
use App\Role;
use App\Department;
use App\Employee;
use App\User;
use App\Admin;
use Gate;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // if(!Gate::allows('isAdmin')){
      //   abort(404,"Sorry,You cannot do these actions");
      // }
      return view('admindashboard',['employees' => Employee::take(4)->get(),
        'employeesCount' =>Employee::count(),
        'payrolls'=>Payroll::take(4)->get(),
        'roles' => Role::count(),
        'departments' => Department::count(),
        'usersCount' => User::count(),
        'adminsCount' => Admin::count()]);

    }

    
}
