<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class AuthsocialiteController extends Controller
{
    public function google()
    {
        $user = Socialite::driver('google')->stateless()->user();
       
         UsersModel::updateOrInsert([
            'email' => $user['email'],
        ], [
            'social_id' => $user['id'],
            'social_type' => 'google', 
            'name' => $user['name'],
            'email_verified_at' => date('Y-m-d h:i:s')
          
        ]);
        $getid = UsersModel::where('email',$user['email'])
                            ->where('social_type','google')
                            ->first()
                            ->id;
        //make session
        Auth::loginUsingId($getid);
        
        return response()->json([
                                  'status'  => 'success',
                                  'message' => 'Login with google success'
                                ]);     
        
    }
    public function facebook(Request $request)
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();

            UsersModel::updateOrInsert([
                'email' => $user['email'],
            ], [
                'social_id' => $user['id'],
                'social_type' => 'facebook', 
                'name' => $user['name'],
                'email_verified_at' => date('Y-m-d h:i:s')
              
            ]);
            $getid = UsersModel::where('email',$user['email'])
            ->where('social_type','facebook')
            ->first()
            ->id;
            //make session
            Auth::loginUsingId($getid);

            return response()->json([
                'status'  => 'success',
                'message' => 'Login with google success'
              ]);
            
        
        } catch (Exception $exception) {
            return response()->json($exception->getMessage());
        }
     
    }
    public function test()
    {
        
    }
}
