<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use Gate;
use DB;
use Illuminate\Support\Facades\Mail;

class EventsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }

  public function addview()
  {
      return view('Alumni.add-event');
  }

  public function index()
  {
    if(!Gate::allows('isAlumni')){
       abort(403,"lol");
     }
    return view('Alumni.alumnidashboard');

  }

  public function show(Request $request){

    if(!Gate::allows('isAlumni')){
       abort(403,"lol");
     }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $events = DB::table('events')
                            ->select('events.id','events.date','events.name','events.body','events.participant')

                            ->orderBy('events.id','asc')

                            ->paginate(10);

    return view('Alumni.alumnidashboard',['events'=>$events],compact('events'));



    // return view('Accountant.accountantdashboard',['expenses'=>Expense::paginate(5)]);

  }
  public function add (Request $request)
  {
    if(!Gate::allows('isAlumni')){
       abort(403,"lol");
     }


    $event = new Event();
    $event->date = $request->date;
    $event->name = $request->name;
    $event->body = $request->body;
    $event->participant = $request->participant;

    $event->save();

    return redirect()->route('alumnidashboard')
        ->with('success','Event added successfully...');
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

  public function emails(Request $request)
  {
    $users = User::all();

    foreach ($users->chunk(100) as $user)
    {
      Mail::queue('emails.welcome', $data, function ($message) {

      });
    }
  }



}
