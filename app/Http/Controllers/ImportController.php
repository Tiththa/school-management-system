<?php

namespace App\Http\Controllers;
use App\Book;
use App\Contact;
use App\CsvData;
use App\Employee;
use App\Http\Requests\CsvImportRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class ImportController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function getImport()
  {
      return view('import');
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

      return view('import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

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

      return view('import_success');
  }


  //=====================IMAGE UPLOADING ================================

  public function fileUpload (Request $request)
  {
    request()->validate([
        'name' => 'required',
        'author' => 'required',
    ]);
    $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $book = new Book();
    $book->name = $request->name;
    $book->author = $request->author;
    $book->mime = $cover->getClientMimeType();
    $book->original_filename = $cover->getClientOriginalName();
    $book->filename = $cover->getFilename().'.'.$extension;
    $book->save();

    return redirect()->route('attendance')
        ->with('success','Book added successfully...');
  }

}
