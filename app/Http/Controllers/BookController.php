<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payroll;
use App\Role;
use App\Department;
use App\Employee;
use App\User;
use App\Admin;
use App\Book;
use Gate;
use DB;
use App\Issue;
use Carbon\Carbon;



use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class BookController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');

  }


  public function addview()
  {
    return view('library.add-books');
  }



  public function index()
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
    return view('library.librarydashboard',[
      'books' => Book::count(),
      'usersCount' => User::count(),
      'issues' => Issue::count()]);

  }

  public function show(Request $request){
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
    // if(!Gate::allows('isAdmin')){
    //    abort(404,"Sorry,You cannot do these actions");
    //  }

  // $attendances = DB::select('select * from attendances,users where users.id=attendances.userId ')
    $books = DB::table('books')
                            ->select('books.id','books.name','books.author','books.summary','books.category','books.bookshelf','books.filename')

                            ->orderBy('books.name','asc')

                            ->paginate(10);




    return view('library.show-books',compact('books'));

  }

  public function fileUpload (Request $request)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
    request()->validate([
        'name' => 'required',
        'author' => 'required',
        'category' => 'required',
        'summary' => 'required',
    ]);
    $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $book = new Book();
    $book->name = $request->name;
    $book->author = $request->author;
    $book->category = $request->category;
    $book->summary = $request->summary;
    $book->bookshelf =  $request->bookshelf;
    $book->mime = $cover->getClientMimeType();
    $book->original_filename = $cover->getClientOriginalName();
    $book->filename = $cover->getFilename().'.'.$extension;
    $book->save();

    return redirect()->route('library.showbooks')
        ->with('success','Book added successfully...');
  }



  public function edit($id)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
      return view('library.edit-books', ['book'=>Book::find($id)]);
  }
  public function update(Request $request, $id)
  {
      $book=Book::findOrFail($id);

  $cover = $request->file('bookcover');
  $extension = $cover->getClientOriginalExtension();
  Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

  $book->name = $request->name;
  $book->author = $request->author;
  $book->category = $request->category;
  $book->summary = $request->summary;
  $book->bookshelf = $request->bookshelf;
  $book->mime = $cover->getClientMimeType();
  $book->original_filename = $cover->getClientOriginalName();
  $book->filename = $cover->getFilename().'.'.$extension;
  $book->save();


  return redirect()->route('library.showbooks');
  }

  public function editshow($id)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
      return view('library.edit-books',['book'=>Book::findOrFail($id)]);
  }

  public function search(Request $request)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
      $search = $request->get('search');
      $books = DB::table('books')->where('name','like','%'.$search.'%')->paginate(5);
      return view('library.show-books',['books'=> $books]);
  }

  public function bookshow($id)
  {
    if(!Gate::allows('isLibrarian')){
       abort(403,"lol");
     }
    return view('library.book-show',['book'=>Book::findOrFail($id)]);
  }

  protected function destroy($id)
  {
      DB::delete('delete from books where id=?',[$id]);

      return redirect()->route('library.showbooks');

  }


}
