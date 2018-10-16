<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subject;
use DB;
use Gate;

class SubjectsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }

  public function addview($id)
  {
      return view('schoolAdmin.add-subjects',['user'=>User::find($id)]);
  }
  public function show(Request $request,$id){

    if(!Gate::allows('isAdmin')){
       abort(403,"lol");
     }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $subjects = DB::table('subjects')
                            ->select('subjects.user_id','subjects.subject','subjects.grade','subjects.teacher')

                            ->orderBy('subjects.grade','asc')

                            ->paginate(10);

    return view('schoolAdmin.show-subjects',['subjects'=>$subjects],compact('subjects'));



    // return view('Accountant.accountantdashboard',['expenses'=>Expense::paginate(5)]);

  }
  public function add (Request $request,$id)
  {
    if(!Gate::allows('isAdmin')){
       abort(403,"lol");
     }


    $subject = Subject::findOrFail($id);;
    $subject->user_id = $request->user_id;
    $subject->subject = $request->subject;
    $subject->grade = $request->grade;
    $subject->teacher = $request->teacher;

    $subject->save();

    return redirect()->route('users-view')
        ->with('success','Subject added successfully...');
  }

  protected function destroy ($id)
  {

    DB::delete('delete from events where id=?',[$id]);

    return redirect()->route('alumnidashboard');
  }

  public function search(Request $request)
  {
    if(!Gate::allows('isAlumni')){
       abort(403,"lol");
     }
      $search = $request->get('search');
      $events = DB::table('events')->where('name','like','%'.$search.'%')->paginate(5);
      return view('Alumni.alumnidashboard',['events'=> $events]);
  }

}
