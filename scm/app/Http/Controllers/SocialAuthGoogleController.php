<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;


class SocialAuthGoogleController extends Controller
{
     public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $create['name'] = $user->getName();

            $create['email'] = $user->getEmail();

            $create['google_id'] = $user->getId();



            $userModel = new User;

            $createdUser = $userModel->addNew($create);

            Auth::loginUsingId($createdUser->id);



            return redirect()->route('home');



        } catch (Exception $e) {



            return redirect('auth/google');



        }
    }
}
