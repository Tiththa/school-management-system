<?php

namespace App\Http\Controllers;
use App\Mail\Welcome;
use App\Issue;
use Illuminate\Http\Request;
use Gate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\User;
use DB;

class BookIssueController extends Controller
{
  public function __construct()
  {

      $this->middleware('auth');
  }


  public function issueView()
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
    return view('library.issue-books');
  }



  public function issueBook (Request $request)
  {


    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }


     $user_id = auth()->id();
     $user = User::find($user_id);

    $issue= new Issue();
    $issue->book_id = $request->book_id;
    $issue->user_id=$request->id;
    $issue->end_date =  $request->date;
    $issue->save();

    // $message = "Book Issue Recorded";
    // Mail::to($user)->send(new Welcome($user, $message));

    return redirect()->route('IssueView')->with('status','Book Issue Recorded');

  }



  public function show(Request $request)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
    $issues = DB::table('issues','users')
                            ->join('users',function($join)
                            {
                              $join->on('issues.user_id','=','users.id');
                            })
                            ->select('users.name','users.id','issues.book_id','users.department','issues.end_date','issues.created_at')

                            ->orderBy('issues.end_date','asc')

                            ->paginate(5);





    return view('library.issued-books',compact('issues'));

  }

  public function reminderEmail($id)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
     $user=User::findOrFail($id);


     $message = "Book Issue Recorded";
     Mail::to($user)->send(new Welcome($user, $message));

     return redirect()->route('issued.books');

  }

  public function bookReturn(Request $request)
  {

    
    $issue->book_id = $request->book_id;
    $issue->user_id=$request->id;
    $issue->end_date =  $request->date;
    $current = Carbon::now();


    $days = $current->diffindays($issue->end_date);
    if($days==0 || $days>0)
    {
      return redirect()->route('issued.books');
    }
    else if($days<0) {
      $fee= $days * 10;
    echo $fee;
      // return view('library.return-books',['fee' => $fee]);
    }

  }

  public function returnView (Request $request)
  {

    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }

    return view('library.return-books');
  }


}
