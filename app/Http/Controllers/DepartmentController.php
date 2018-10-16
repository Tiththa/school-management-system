<?php

namespace App\Http\Controllers;

use App\Department;
use App\Admin;
use Session;
use Illuminate\Http\Request;
use Gate;

class DepartmentController extends Controller
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

        return view('department.index', ['departments'=>Department::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
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
			'name' => 'required'
		]);

		$department = new Department;
		$department->name = $request->name;
		$department->slug = str_slug($request->name);
		$department->save();

		Session::flash('success', 'department created');
		return redirect()->route('departments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('department.show', ['department'=>Department::where('slug',$slug)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view('department.edit', ['department'=>Department::findOrFail($id)]);
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
		$department = Department::findOrFail($id);

        $this->validate($request,[
			'name' => 'required'
		]);

		$department->name = $request->name;
		$department->slug = str_slug($request->name);
		$department->save();

		Session::flash('success', 'department updated');
		return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $department=Department::find($id);

		foreach($department->roles as $role){
			$role->delete();
		}

		$department->delete();

		Session::flash('success', 'department deleted');
		return redirect()->route('departments.index');
    }
}
