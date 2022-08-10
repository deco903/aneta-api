<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\UsersModel;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/sessionhabis', function () {
    return response()->json('Token Invalid',500);
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->name('verification.verify');

Route::get('/', function () {
    return redirect('/home');
});

Route::get('all-union', [UnionController::class, 'AllUnion']);

Auth::routes();
 
//verifikasi email user
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_action'])->name('login.action');
Route::get('password', [AuthController::class, 'password'])->name('password');
Route::post('password', [AuthController::class, 'password_action'])->name('password.action');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['title' => 'home'], function(){
    Route::get('dashboard', [DashController::class, 'index'])->name('dashboard');
});


Route::get('session/tampil',[TestController::class,'tampilkanSession']);
Route::get('session/buat',[TestController::class,'buatSession']);
Route::get('session/hapus',[TestController::class,'hapusSession']);
