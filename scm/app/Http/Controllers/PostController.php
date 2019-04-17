<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Post;
use App\Images;
use Auth;
use Purifier;
use Gate;
use Image;
use File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(!Gate::allows('isUser' || 'isDealer')){  // || for multiple parameters  can('isAdmin')
        //     abort(404,'lol');
        // }
        $posts = DB::table('posts')
                                ->select('id','condition','year','make','model','trim','submodel','transmission','fuel_type','price','created_at','slug')
                                ->orderBy('created_at','desc')
                                ->paginate(36);
        return view('user.show',['posts'=>$posts],compact('post'));       

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function viewAddForm()
    {


        if(Auth::user()->posts_no == '0')
        {
            return redirect()->route('home');
        }
        else
        {            
            $make_list = DB::table('posts')
                                
                                ->groupBy('make')
                                ->get();
            return view('user.addpost')->with('make_list' ,$make_list);
        }

        
    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->user_id = Auth::id();
        $post->body_style = $request->style;
        $post->condition = $request->condition;
        $post->year = $request->year;
        $post->make = $request->make;
        $post->model = $request->model;
        $post->submodel = $request->sub_model;
        $post->trim = $request->trim;
        $post->mileage = $request->mileage;
        $post->transmission = $request->transmission;
        $post->fuel_type = $request->fuel_type;
        $post->engine_capacity = $request->engine_capacity;
        $post->highway_mpg = $request->highway_mpg;
        $post->highway_fuel = $request->highway_fuel;
        $post->city_mpg = $request->city_mpg;
        $post->city_fuel = $request->city_fuel;
        $post->exterior_colour = $request->color;
        $post->owner = $request->owner;
        $post->price = $request->price;
        $post->features = Purifier::clean($request->features);
        $post->info = Purifier::clean($request->info);
        $post->location = $request->location;
        $post->province = $request->province;
        $post->slug = $request->year.'-'.$request->make.'-'.$request->model.'-'.str_random(10);
        $post->save();

        DB::table('users')
            ->where('id',$post->user_id)
            ->update([
                'posts_no' => DB::raw('posts_no - 1'),
            ]);
        // $user = Auth::id()->decrement('posts_no');
        
        return redirect()->route('home');
        // return redirect()->route('images.view', $post->id);



        //

    }

    
    public function show($slug)
    {    
        
        $post = Post::where('slug','=',$slug)->firstOrFail();
        // $post = Post::find($id);        
         $posts = DB::table('posts')
             ->join('images', 'posts.id', '=', 'images.post_id')->where('posts.slug', '=', $slug)->get();
        
        return view('user.productpage',['posts'=>$posts],compact('post'));


    }

    // public function showold($id)
    // {
        
    //      $post = Post::find($id);
    //     return view('user.productpage')->withPost($post);
    // }



    public function edit($id)
    {
        $post = Post::find($id);
       
        
        // return view('user.editpost',['posts'=>$posts]);
                                
        return view('user.editpost')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->body_style = $request->style;
        $post->condition = $request->condition;
        $post->year = $request->year;
        $post->make = $request->make;
        $post->model = $request->model;
        $post->submodel = $request->sub_model;
        $post->trim = $request->trim;
        $post->mileage = $request->mileage;
        $post->transmission = $request->transmission;
        $post->fuel_type = $request->fuel_type;
        $post->engine_capacity = $request->engine_capacity;
        $post->highway_mpg = $request->highway_mpg;
        $post->highway_fuel = $request->highway_fuel;
        $post->city_mpg = $request->city_mpg;
        $post->city_fuel = $request->city_fuel;
        $post->exterior_colour = $request->color;
        $post->owner = $request->owner;
        $post->price = $request->price;
        $post->features = Purifier::clean($request->features);
        $post->info = Purifier::clean($request->info);
        $post->location = $request->location;
        $post->province = $request->province;
        $post->save();

        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function getCondition()
    // {
    //     $condition_list = DB::table('posts')
    //                         ->groupBy('condition')
    //                         ->get();
    //     return view('user.addpost')->with('condition_list', $condition_list);
    // }
    

    public function getModellist()
    {
        $makeslist = DB::table('posts')                            
                            ->groupBy('make')
                            ->get();
        return view('user.editpost')->with('make_list' ,$makeslist);
    }

    public function fetch (Request $request)
    {
        $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('country_state_city')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }

    

    public function storeImages(Request $request,$id)
    {
        // if ($request->hasFile('image')){
        //     $post = Post::find($id);
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     File::makeDirectory($post->id, $mode = 0777, true, true);
        //     $location = storage_path('/app/posts/' . $post->id .'/' . $filename);
            
        //     Image::make($image)->resize(800,400)->save($location);

        //     // $post->image =  $filename;
        // }

        $post = Post::find($id);
        $image = $request->file('image');
        $folder = storage_path('/app/posts/' . Auth::id() . '/' . $post->id . '/');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        if (!File::exists($folder)) {
            File::makeDirectory($folder, 0775, true, true);
            $location = storage_path('/app/posts/' . Auth::id() . '/' . $post->id . '/' . $filename);
            Image::make($image)->resize(800,400)->save($location);
        }

    }

        
}
