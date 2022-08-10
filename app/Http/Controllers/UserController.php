<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'email_verified_at' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['status' => 'fail', 'validator_errors' => $validator->errors()]);
        }

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if($user){
            return response()->json(['status' => 'success', 'message' => 'user registrasion succcessfully complated','data' => $user]);
        }
        return response()->json(['status' => 'fail', 'message' => 'user registrasion fail!']);

    }

    public function login(Request $request)
    {

    	$validator = Validator::make($request->all(),[
    		'email' => 'required|email',
    		'password' => 'required|min:8',
    	]);

    	if ($validator->fails()){
    		return response()->json(['status' => 'fail', 'validation_errors' => $validator->errors()]);
    	}


    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $email_verified_at = DB::table('users')->where('email', $request->email)->whereNotNull('email_verified_at')->first();
            // dd($email_verified_at);
              if($email_verified_at){
                $user = Auth::user();
    		    $token = $user->createToken('usertoken')->accessToken;
                 // dd($token);

    		   return response()->json(['status' => 'success','login' => true, 'token' => $token, 'data' => $user]);
            }else{
                return response()->json(['status' => 'fail', 'message' => 'email verified not exist']);
            }
    	} else {
    		return response()->json(['status' => 'fail', 'message' => 'ops email and password invalid!']);
    	}

    }

    public function userDetail()
    {
    	$user = Auth::user();
    	if($user){
    		return response()->json(['status' => 'success', 'user' => $user]);
    	}
    	return response()->json(['status' => 'fail', 'message' => 'user not found']);
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json(['massage'=>'sucessfully logout'],200);
    }

}
