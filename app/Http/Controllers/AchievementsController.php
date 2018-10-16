<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use DB;
use App\Achievement;
use App\User;

class AchievementsController extends Controller
{
  public function __construct()
  {

       $this->middleware('auth');
  }

  public function show(Request $request){

    // if(!Gate::allows('isAdmin')){
    //    abort(403,"Sorry,You cannot do these actions");
    //  }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $achievements = DB::table('users','achievements')
                            ->join('achievements',function($join)
                            {
                              $join->on('achievements.user_id','=','users.id');
                            })
                            ->select('users.id','achievements.userId','users.name','achievements.name','achievements.year')

                            ->where('users.role' ,'=' , 'Student')

                            ->orderBy('achievements.year','desc')

                            ->paginate(5);




    return view('student.achievements',['achievements'=>$achievements],compact('achievements'));

  }


  protected function create(Request $request ,$id)
  {
    $achievements=Achievement::findOrFail($id);
    // $achievements = new Achievement;

    $achievements->name =  $request->name;
    $achievements->year =  $request->year;
    $achievements->save();



    return redirect()->route('users-achievements')->with('status','Attendance Recorded');

  }

  protected function add($id)
  {
    return view('student.add-achievement', ['user'=>User::find($id)]);
  }

  protected function edit()
  {

  }


  protected function destroy()
  {

  }

}
