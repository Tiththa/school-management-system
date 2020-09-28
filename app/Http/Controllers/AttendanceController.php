<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Attendance;
use Carbon\Carbon;
use Gate;



class AttendanceController extends Controller
{
  public function __construct()
  {
       //$this->middleware('auth:admin');
       //$this->middleware('auth');
  }


  public function show(Request $request){

    // if(!Gate::allows('isAdmin')){
    //    abort(404,"Sorry,You cannot do these actions");
    //  }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $attendances = DB::table('users','attendances')
                            ->join('attendances',function($join)
                            {
                              $join->on('attendances.userId','=','users.id');
                            })
                            ->select('users.id','attendances.userId','users.name','users.department','attendances.updated_at')

                            ->orderBy('attendances.updated_at','desc')

                            ->paginate(5);

    $current = Carbon::now();
    $current = new Carbon();


    return view('attendance',compact('attendances'));

  }



  protected function store()
  {
    $attendance = new Attendance;

    $attendance->userId = request('barcode');
    $attendance->save();




    return redirect()->route('attendance')->with('status','Attendance Recorded');

  }

  protected function destroy($userId)
  {
      DB::delete('delete from attendances where userId=?',[$userId]);

      return redirect()->route('attendance');

  }



}
