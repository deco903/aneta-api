<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Jobs\SendMailJob;
use App\Models\User;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function index(AuthRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $cek_verif = UsersModel::where('email',$request->email)
                                    ->whereNotnull('email_verified_at')->first();
            if($cek_verif)
            {
                $user = UsersModel::where('email',$request->email)->first();
                // Auth::loginUsingId($user->id);
                 $token = $user->createToken('aneta_token')->accessToken;
                 return response()->json([
                                             'status' => true,
                                             'user'  => $user,
                                             'token' => $token
                                         ]);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'email not verif'

                ]);
            }

        }else{
            return response()->json([
                'status' => false,
                'message' => 'Failed email or password'

            ]);
        }
    }

    public function logout(Request $request)
    {

        if (Auth::check()) {
            $request->user()->token()->revoke();
            return response()->json([
                'status' => true,
                'message' => 'Success logout'
            ]);
         }


    }
    public function aktivasi(Request $request)
    {
        $user = UsersModel::where('email',$request->email)->first()->id ?? null;
        if($user){
            Auth::loginUsingId($user);
            $email = $request->user();
            SendMailJob::dispatch($email);
            return response()->json([
                'status'    => true,
                'message'   => 'Send email verif succes'
            ]);
        }else{
            return response()->json([
                'status'    => false,
                'message'   => 'email not found'
            ]);
        }

    }

    public function home()
    {
        $data['title'] = 'Home API Aneta';
        return view('auth.home', $data);
    }

    public function register()
    {
        $data['title'] = 'register';
        return view('auth.register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = new user([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        return redirect()->route('login')->with('success','Registrasi berhasil, silahkan login!');
    }

    public function login()
    {
        $data['title'] = 'login';
        return view('auth.login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            return redirect('dashboard');
        }

        return back()->withErrors([
            'password' => 'wrong email or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('auth/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function _logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function daftar(RegisterRequest $request)
    {
        try {
            User::insert([
                'email' => $request->email,
                'name' => $request->name,
                'password'  => Hash::make($request->password)
            ]);

            return response()->json([
                'status'    => true,
                'message'   => 'Succes Register',
            ],500
            );

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }
    }
}
