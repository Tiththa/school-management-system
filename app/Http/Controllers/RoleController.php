<?php

namespace App\Http\Controllers;

use App\Role;
use App\Department;
use App\Employee;
use Session;
use Illuminate\Http\Request;

class RoleController extends Controller
{
     public function __construct()
    {
          $this->middleware('auth:admin');
    }
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('role.index',['roles'=>Role::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
		if($departments->count() ==0)
		{
			Session::flash('info', 'you must have at least 1 department created before attempting to create a role');
			return redirect()->back();
		}
		return view('role.create')->with('departments', $departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			'name' =>'required|max:50',
			'salary' => 'nullable|required',
			'department_id' => 'required'
		]);

		Role::create([
			'name' => $request->name,
			'salary' => $request->salary,
			'department_id' => $request->department_id,
			'slug'=>str_slug($request->name)
		]);

		Session::flash('success', 'new role created');
		return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('role.show',['role'=>Role::where('slug',$slug)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('role.edit', ['role'=> Role::find($id),
										 'departments'=>Department::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);

		$this->validate($request,[
			'name' =>'required|max:50',
			'salary' => 'nullable|required',
			'department_id' => 'required'
		]);

		$role->name = $request->name;
		$role->salary = $request->salary;
		$role->department_id = $request->department_id;
		$role->slug = str_slug($request->name);


		Session::flash('success', 'role updated!');
		return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
		foreach($role->employees as $employee){
			$employee->forceDelete();
		}
		$role->delete();

		Session::flash('success', 'role deleted!');
		return redirect()->route('role.index');
    }
}
