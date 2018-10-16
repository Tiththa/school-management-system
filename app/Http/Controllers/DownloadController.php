<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\Employee;
use PDF;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
				  $this->middleware('auth:admin');
    }

   public function pdfDownload($id){
	   $pdf = PDF::loadview('payroll.download.allpayroll',['employee'=>Employee::find($id)]);
	   return $pdf->stream('employee.pdf');
   }


   public function singlePayroll($id){
	    $pdf = PDF::loadview('payroll.download.singlepayroll',['payroll'=>Payroll::find($id)]);
	   return $pdf->stream('employee.pdf');
   }
}
