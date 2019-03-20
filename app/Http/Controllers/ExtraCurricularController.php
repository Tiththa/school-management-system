<?php

namespace App\Http\Controllers;
use Kyslik\ColumnSortable\Sortable;

use DB;
use Illuminate\Http\Request;
use Gate;
use App\User;
use App\ExtraCurricular;

class ExtraCurricularController extends Controller
{
  public function __construct()
  {
    //  $this->middleware('auth');
  }

  public function index()
  {
    // if(!Gate::allows('isTeacher')){
    //   abort(404,"Sorry,You cannot do these actions");
    // }
    return view('activities.add-activity');


  }
  public function create(Request $request){

    $this->validate($request,[
      'name' => 'required|max:255',
      'user_id' => 'required',
      'position' => 'required',
      'year' => 'required',
      'tic' => 'required'
      ]);

  $activity = new ExtraCurricular();
  $activity->activity_name = $request->name;
  $activity->user_id = $request->user_id;
  $activity->position = $request->position;
  $activity->year = $request->year;
  $activity->tic =  $request->tic;

  $activity->save();

  return redirect()->route('extra-activities')
      ->with('success','Book added successfully...');
  }

  public function show(){

    // if(!Gate::allows('isAdmin')){
    //    abort(404,"Sorry,You cannot do these actions");
    //  }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $activities = DB::table('users','extra_curriculars')
                            ->join('extra_curriculars',function($join)
                            {
                              $join->on('extra_curriculars.user_id','=','users.id');
                            })
                            ->select('users.id','extra_curriculars.user_id','extra_curriculars.activity_name','users.name','extra_curriculars.position','extra_curriculars.year','extra_curriculars.tic')

                            ->orderBy('extra_curriculars.year','desc')

                            ->paginate(20);




    return view('activities.extra-activities',['activities'=>$activities],compact('activities.extra-activities'));

  }

  public function edit($id)
  {
      $activity=ExtraCurricular::find($id);

      return view('activities.edit-extra-activities')->with('activity',$activity);
  }

  public function update(Request $request, $id)
  {
    $activity=ExtraCurricular::find($id);
    $activity->activity_name = $request->name;
    $activity->user_id = $request->user_id;
    $activity->position = $request->position;
    $activity->year = $request->year;
    $activity->tic =  $request->tic;

    $activity->save();



    return redirect()->route('extra-activities');
  }


  protected function destroy($id)
  {
      DB::delete('delete from extra_curriculars where user_id=?',[$id]);

      return redirect()->route('extra-activities');

  }



}
