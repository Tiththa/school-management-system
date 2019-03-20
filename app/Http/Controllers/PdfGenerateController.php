<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\User;
use Response;
use App;

class PdfGenerateController extends Controller
{
    public function pdfview(Request $request)
    {

      $users = DB::table("users")->get();
      view()->share('users',$users);

      if($request->has('download')){
        //pass view files
        $pdf = PDF::loadView('pdfview');
        //download pdfview
        return $pdf->download('userlist.pdf');
      }
      return view('pdfview');
    }

    public function pdfviewStudent(Request $request)
    {

      $users = DB::table("users")->get();
      
      view()->share('users',$users);

      if($request->has('download')){
        //pass view files
        $pdf = PDF::loadView('pdfviewStdID');
        //download pdfview
        return $pdf->download('Student-ID.pdf');
      }
      return view('student.User-Profile');


    }
}
