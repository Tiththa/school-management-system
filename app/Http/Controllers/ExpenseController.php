<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Expense;
use Gate;
use DB;
use App\CsvData;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ExpenseController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');

  }

  public function addview()
  {
      return view('Accountant.add-expenses');
  }

  public function index()
  {
    if(!Gate::allows('isAccountant')){
       abort(403,"lol");
     }
    return view('Accountant.accountantdashboard',[
      'expenseCount' =>Expense::count(),
      ]);

  }

  public function show(Request $request){

    if(!Gate::allows('isAccountant')){
       abort(403,"lol");
     }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $expenses = DB::table('expenses')
                            ->select('expenses.id','expenses.title','expenses.name','expenses.value','expenses.type')

                            ->orderBy('expenses.id','asc')

                            ->paginate(10);

    return view('Accountant.accountantdashboard',['expenses'=>$expenses],compact('expenses'));



    // return view('Accountant.accountantdashboard',['expenses'=>Expense::paginate(5)]);

  }
  public function add (Request $request)
  {
    if(!Gate::allows('isAccountant')){
       abort(403,"lol");
     }


    $expense = new Expense();
    $expense->title = $request->title;
    $expense->name = $request->name;
    $expense->value = $request->value;
    $expense->type = $request->type;

    $expense->save();

    return redirect()->route('accountantdashboard')
        ->with('success','Book added successfully...');
  }
  public function edit($id)
  {
    if(!Gate::allows('isAccountant')){
       abort(403,"lol");
     }
      return view('Accountant.edit-expenses', ['expense'=>Expense::find($id)]);
  }

  public function update (Request $request, $id)
  {
    if(!Gate::allows('isAccountant')){
       abort(403,"lol");
     }


    $expense = new Expense();
    $expense->title = $request->title;
    $expense->name = $request->name;
    $expense->value = $request->value;
    $expense->type = $request->type;

    $expense->save();

    return redirect()->route('accountantdashboard')
        ->with('success','Book added successfully...');
  }


  protected function destroy ($id)
  {

    DB::delete('delete from expenses where id=?',[$id]);

    return redirect()->route('accountantdashboard');
  }

  public function search(Request $request)
  {
    if(!Gate::allows('isAccountant')){
       abort(403,"lol");
     }
      $search = $request->get('search');
      $expenses = DB::table('expenses')->where('title','like','%'.$search.'%')->paginate(5);
      return view('Accountant.accountantdashboard',['expenses'=> $expenses]);
  }


//======================CSV DATA IMPORT=================================

public function getImport()
{
    return view('Accountant.import');
}
public function parseImport(CsvImportRequest $request)
{

    $path = $request->file('csv_file')->getRealPath();

    if ($request->has('header')) {
        $data = Excel::load($path, function($reader) {})->get()->toArray();
    } else {
        $data = array_map('str_getcsv', file($path));
    }

    if (count($data) > 0) {
        if ($request->has('header')) {
            $csv_header_fields = [];
            foreach ($data[0] as $key => $value) {
                $csv_header_fields[] = $key;
            }
        }
        $csv_data = array_slice($data, 0, 5);

        $csv_data_file = CsvData::create([
            'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
            'csv_header' => $request->has('header'),
            'csv_data' => json_encode($data)
        ]);
    } else {
        return redirect()->back();
    }

    return view('Accountant.import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

}

public function processImport(Request $request)
{
    $data = CsvData::find($request->csv_data_file_id);
    $csv_data = json_decode($data->csv_data, true);
    foreach ($csv_data as $row) {
        $employee = new Employee();
        foreach (config('app.db_fields') as $index => $field) {
            if ($data->csv_header) {
                $employee->$field = $row[$request->fields[$field]];
            } else {
                $employee->$field = $row[$request->fields[$index]];
            }
        }
        $employee->save();
    }

    return view('Accountant.import_success');
}



}
