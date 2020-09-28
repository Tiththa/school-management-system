<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Schema;
use DB;
use Auth;
use Illuminate\Http\Request;
use Gate;

class UserRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'department' => $data['department'],
            'role' => $data['role'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'nic' => $data['nic'],
            'admission_no' => $data['admission_no'],


        ]);
    }
    protected function edit($id)
    {
      return view('student.edit-user-register', ['user'=>User::find($id)]);
    }


    protected function Update(Request $request, $id)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     // 'password' => Hash::make($data['password']),
        //     'department' => $data['department'],
        //     'role' => $data['role'],
        //     'phone_number' => $data['phone_number'],
        //     'address' => $data['address'],
        //     'nic' => $data['nic'],
        //     'admission_no' => $data['admission_no'],
        //
        //
        // ]);
        $user=User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        $user->department = $request->department;
        $user->role = $request->role;
        $user->phone_number =  $request->phone_number;
        $user->address = $request->address;
        $user->nic = $request->nic;
        $user->admission_no = $request->admission_no;
        $user->save();

        return redirect()->route('users-view');
    }
    public function showStudents(Request $request){

      // if(!Gate::allows('isAdmin')){
      //    abort(404,"Sorry,You cannot do these actions");
      //  }

      // $users = DB::select('select * from users where users.role=?',['Student'])
      //             ->paginate(5)
      $users = DB::table('users')

                              ->select('id','name','role','phone_number','email','address')

                              ->where('role','=','Student')

                              ->orderBy('name','desc')

                              ->paginate(15);


      return view('student.student-index',compact('users'))->with('usersCount',User::count());

    }

    public function showUsers ()
    {
      return view('student.users', ['users'=>User::paginate(10)]);
    }

    public function resetPassword ()
    {
      return view('student.password-change');
    }

    public function admin_credential_rules(array $data)
    {
      $messages = [
        'cpassword.required' => 'Please enter current password',
        'password.required' => 'Please enter password',
      ];

      $validator = Validator::make($data, [
        'cpassword' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',
      ], $messages);

      return $validator;
    }
    public function postCredentials(Request $request)
{
  if(Auth::Check())
  {
    $request_data = $request->All();
    $validator = $this->admin_credential_rules($request_data);
    if($validator->fails())
    {
      return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
    }
    else
    {
        $cpassword = Auth::User()->password;
        if(Hash::check($request_data['cpassword'], $cpassword))
        {
          $user_id = Auth::User()->id;
          $obj_user = User::find($user_id);
          $obj_user->password = Hash::make($request_data['password']);;
          $obj_user->save();
          return redirect()->route('password_change')->with('status','Password Changed Successfully');
        }
        else
        {
          return redirect()->route('password_change')->with('error','Please enter correct current password');
          // $error = array('current-password' => 'Please enter correct current password');
          // return response()->json(array('error' => $error), 400);
        }
      }
    }
    else
    {
    return redirect()->to('/');
    }
  }

  public function userShow($id)
  {
    // if(!Gate::allows('isLibrarian')){
    //    abort(403,"lol");
    //  }
    return view('student.User-Profile',['user'=>User::findOrFail($id)]);
  }

  protected function destroy($id)
  {
      DB::delete('delete from users where id=?',[$id]);

      return redirect()->route('users-view')->with('success','User Deleted successfully...');

  }

  public function index()
  {
    if(!Gate::allows('isAdmin')){
       abort(403,"Denied");
     }
    return view('student.schoolAdminDashboard',['usersCount' => User::count()]);

  }
  public function search(Request $request)
  {
    if(!Gate::allows('isAdmin')){
       abort(403,"lol");
     }
      $search = $request->get('search');
      $users = DB::table('users')->where('name','like','%'.$search.'%')->paginate(10);
      return view('student.users',['users'=> $users]);
  }

}
