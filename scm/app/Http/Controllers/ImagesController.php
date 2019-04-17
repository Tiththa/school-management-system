<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Post;
use App\Images;
use Auth;
use Gate;
use Image;
use File;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{

	public function getImages(Request $request,$id)
    {
        $post = Post::find($id);
        return view('user.picInfo')->withPost($post);;
    }


	
    public function storeImages(Request $request,$id)
    {
        $post = Post::find($id);

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $image4 = $request->file('image4');
        $image5 = $request->file('image5');
        $image6 = $request->file('image6');
        $image7 = $request->file('image7');
        $image8 = $request->file('image8');
        $image9 = $request->file('image9');
        $image10 = $request->file('image10');

        
        $folder = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/');

        $filename1 = $post->id . '1'  . time() . '.' . $image1->getClientOriginalExtension();
        $filename2 = $post->id . '2'  . time() . '.' . $image2->getClientOriginalExtension();
        $filename3 = $post->id . '3'  . time() . '.' . $image3->getClientOriginalExtension();
        $filename4 = $post->id . '4'  . time() . '.' . $image4->getClientOriginalExtension();
        $filename5 = $post->id . '5'  . time() . '.' . $image5->getClientOriginalExtension();
        $filename6 = $post->id . '6'  . time() . '.' . $image6->getClientOriginalExtension();
        $filename7 = $post->id . '7'  . time() . '.' . $image7->getClientOriginalExtension();
        $filename8 = $post->id . '8'  . time() . '.' . $image8->getClientOriginalExtension();
        $filename9 = $post->id . '9'  . time() . '.' . $image9->getClientOriginalExtension();
        $filename10 =  $post->id . '10' . time() . '.' . $image10->getClientOriginalExtension();


        if (!File::exists($folder)) {

            File::makeDirectory($folder, 0775, true, true);

            $location1 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename1);
            $location2 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename2);
            $location3 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename3);
            $location4 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename4);
            $location5 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename5);
            $location6 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename6);
            $location7 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename7);
            $location8 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename8);
            $location9 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename9);
            $location10 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename10);


            Image::make($image1)->save($location1);
            Image::make($image2)->save($location2);
            Image::make($image3)->save($location3);
            Image::make($image4)->save($location4);
            Image::make($image5)->save($location5);
            Image::make($image6)->save($location6);
            Image::make($image7)->save($location7);
            Image::make($image8)->save($location8);
            Image::make($image9)->save($location9);
            Image::make($image10)->save($location10);

            $nImage = new Images();
	        $nImage->user_id = Auth::id();
	        $nImage->post_id = $post->id;
	        $nImage->image_1 = $filename1;
	        $nImage->image_2 = $filename2;
	        $nImage->image_3 = $filename3;
	        $nImage->image_4 = $filename4;
	        $nImage->image_5 = $filename5;
	        $nImage->image_6 = $filename6;
	        $nImage->image_7 = $filename7;
	        $nImage->image_8 = $filename8;
	        $nImage->image_9 = $filename9;
	        $nImage->image_10 = $filename10;
	        $nImage->save();

        }

        
        
        return redirect()->route('home');

	        
	}

    public function getDealerImages(Request $request,$id)
    {
        $post = Post::find($id);
        return view('dealer.picInfo')->withPost($post);;
    }

    public function storeDealerImages(Request $request,$id)
    {
        $post = Post::find($id);

        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $image4 = $request->file('image4');
        $image5 = $request->file('image5');
        $image6 = $request->file('image6');
        $image7 = $request->file('image7');
        $image8 = $request->file('image8');
        $image9 = $request->file('image9');
        $image10 = $request->file('image10');
        $image11 = $request->file('image11');
        $image12 = $request->file('image12');
        $image13 = $request->file('image13');
        $image14 = $request->file('image14');
        $image15 = $request->file('image15');

        
        $folder = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/');

        $filename1 = $post->id . '1'  . time() . '.' . $image1->getClientOriginalExtension();
        $filename2 = $post->id . '2'  . time() . '.' . $image2->getClientOriginalExtension();
        $filename3 = $post->id . '3'  . time() . '.' . $image3->getClientOriginalExtension();
        $filename4 = $post->id . '4'  . time() . '.' . $image4->getClientOriginalExtension();
        $filename5 = $post->id . '5'  . time() . '.' . $image5->getClientOriginalExtension();
        $filename6 = $post->id . '6'  . time() . '.' . $image6->getClientOriginalExtension();
        $filename7 = $post->id . '7'  . time() . '.' . $image7->getClientOriginalExtension();
        $filename8 = $post->id . '8'  . time() . '.' . $image8->getClientOriginalExtension();
        $filename9 = $post->id . '9'  . time() . '.' . $image9->getClientOriginalExtension();
        $filename10 = $post->id . '10' . time() . '.' . $image10->getClientOriginalExtension();
        $filename11 = $post->id . '11'  . time() . '.' . $image11->getClientOriginalExtension();
        $filename12 = $post->id . '12'  . time() . '.' . $image12->getClientOriginalExtension();
        $filename13 = $post->id . '13'  . time() . '.' . $image13->getClientOriginalExtension();
        $filename14 = $post->id . '14'  . time() . '.' . $image14->getClientOriginalExtension();
        $filename15 = $post->id . '15'  . time() . '.' . $image15->getClientOriginalExtension();


        if (!File::exists($folder)) {

            File::makeDirectory($folder, 0775, true, true);

            $location1 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename1);
            $location2 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename2);
            $location3 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename3);
            $location4 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename4);
            $location5 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename5);
            $location6 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename6);
            $location7 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename7);
            $location8 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename8);
            $location9 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename9);
            $location10 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename10);
            $location11 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename11);
            $location12 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename12);
            $location13 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename13);
            $location14 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename14);
            $location15 = storage_path('/app/public/posts/' . Auth::id() . '/' . $post->id . '/' . $filename15);


            Image::make($image1)->save($location1);
            Image::make($image2)->save($location2);
            Image::make($image3)->save($location3);
            Image::make($image4)->save($location4);
            Image::make($image5)->save($location5);
            Image::make($image6)->save($location6);
            Image::make($image7)->save($location7);
            Image::make($image8)->save($location8);
            Image::make($image9)->save($location9);
            Image::make($image10)->save($location10);
            Image::make($image11)->save($location11);
            Image::make($image12)->save($location12);
            Image::make($image13)->save($location13);
            Image::make($image14)->save($location14);
            Image::make($image15)->save($location15);

            $nImage = new Images();
            $nImage->user_id = Auth::id();
            $nImage->post_id = $post->id;
            $nImage->image_1 = $filename1;
            $nImage->image_2 = $filename2;
            $nImage->image_3 = $filename3;
            $nImage->image_4 = $filename4;
            $nImage->image_5 = $filename5;
            $nImage->image_6 = $filename6;
            $nImage->image_7 = $filename7;
            $nImage->image_8 = $filename8;
            $nImage->image_9 = $filename9;
            $nImage->image_10 = $filename10;
            $nImage->image_11 = $filename11;
            $nImage->image_12 = $filename12;
            $nImage->image_13 = $filename13;
            $nImage->image_14 = $filename14;
            $nImage->image_15 = $filename15;
            $nImage->save();

        }

        
        
        return redirect()->route('home');

            
    }

	

}
