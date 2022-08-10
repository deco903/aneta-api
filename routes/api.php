<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\Api_Controlleruserprofile;
use App\Http\Controllers\ApiMobileJadwalPelajaran;
use App\Http\Controllers\ApiSiswaJadwalPelajaran;
use App\Http\Controllers\ApiSiswaKelas;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthsocialiteController;
use App\Http\Controllers\CapaianPenilaianController;
use App\Http\Controllers\DatapelajaranController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EraporController;
use App\Http\Controllers\FlowableController;
use App\Http\Controllers\GlobalcrudController;
use App\Http\Controllers\PushnotifController;
use App\Http\Controllers\ShowalltableController;
use App\Http\Controllers\UnionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\InputdatapenilaianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PerencanaaPenilaianController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\DeskripsiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Models\UsersModel;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

//verif email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->name('verification.verify');

//send email verif
// Route::get('/email/verification-notification', function (Request $request) {

//     $request->user()->sendEmailVerificationNotification();


// })->name('verification.send');

Route::post('/email/verification-notification', [AuthController::class, 'aktivasi']);


Route::get('/auth-google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth-facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});


Route::get('/all-union', [UnionController::class, 'AllUnion']);

Route::get('/callback-google', [AuthsocialiteController::class, 'google']);
Route::get('/callback-facebook', [AuthsocialiteController::class, 'facebook']);
Route::get('/global_getdatawhere_first', [GlobalcrudController::class, 'get_data_where_first']);
Route::post('/daftar', [AuthController::class, 'daftar']);
Route::get('/global_getdata', [GlobalcrudController::class, 'get_data']);
Route::post('/global_join', [GlobalcrudController::class, 'global_join']);
Route::post('/global_join_where', [GlobalcrudController::class, 'global_join_where']);
Route::post('/global_join_first', [GlobalcrudController::class, 'global_join_first']);
Route::post('/testt', [GlobalcrudController::class, 'test']);
Route::post('/get_proses_def', [FlowableController::class, 'index']);


//guru insert
Route::post('/guru_register', [GuruController::class, 'store']);


//siswa insert
Route::post('/siswa_register', [SiswaController::class, 'store']);

// Route::middleware('auth:api')->group(function () {


    //academic_year
    Route::post('/academic_year_change_aktiv', [AcademicYearController::class, 'update_academic_year']);




    //routing
    Route::post('/data_intervalpredikat', [DatapelajaranController::class, 'data_interval_predikat']);
    Route::post('/delete_data_interval_predikat', [DatapelajaranController::class, 'delete_data_interval_predikat']);
    Route::post('/update_data_interval_predikat', [DatapelajaranController::class, 'update_data_interval_predikat']);
    Route::post('/sikronisasi_data_interval_predikat', [DatapelajaranController::class, 'sikronisasi_data_interval_predikat']);

    Route::post('/peniliain_capaian_penilaian', [CapaianPenilaianController::class, 'pencapaian_penilaian']);


    Route::post('/insert_perancanaan_nilai_pengetahuan', [PerencanaaPenilaianController::class, 'input']);    

    Route::post('/insert_perancanaan_bobot', [PerencanaaPenilaianController::class, 'input_bobot']);    


    Route::post('/test123', [EmailController::class, 'index']);    

    Route::post('/get_input_penilian', [InputdatapenilaianController::class, 'get_data']);
    Route::post('/getInputNilaiSpiritualDanSocial', [InputdatapenilaianController::class, 'getInputNilaiSpiritualDanSocial']);
    Route::post('/get_nilaipts_pas', [InputdatapenilaianController::class, 'get_nilaipts_pas']);
    Route::post('/insert_input_penilian', [InputdatapenilaianController::class, 'insert_datanilai']);
    Route::post('/insert_pts_pas', [InputdatapenilaianController::class, 'insert_pts_pas']);
    Route::post('/insertInputNilaiSpiritualDanSocial', [InputdatapenilaianController::class, 'insertInputNilaiSpiritualDanSocial']);

    //eratport
    Route::post('/get_status_penilian', [EraporController::class, 'get_status_penilian']);


    //api mbobile
    Route::post('/siswa_get_pelajaran_ongoing', [ApiSiswaJadwalPelajaran::class, 'get_pelajaran_ongoing']);

    Route::post('/siswa_get_kelas_mata_pelajaran', [ApiSiswaKelas::class, 'mata_pelajaran']);



    Route::get('/get_all_table', [ShowalltableController::class, 'index']);
    Route::get('/table_info', [ShowalltableController::class, 'table_info']);

    Route::post('/global_insertdata', [GlobalcrudController::class, 'insert']);
    Route::post('/global_insertmultiple', [KompetensiController::class, 'insert_multiple']);
    Route::get('/global_editdeskripsi', [DeskripsiController::class, 'edit_deskripsi']);
    Route::get('/get_data', [DeskripsiController::class, 'get']);
    Route::post('/global_updatedeskripsi', [DeskripsiController::class, 'update_deskripsi']);
    Route::post('/global_deletedata', [GlobalcrudController::class, 'delete']);
    Route::post('/global_getdatabyid', [GlobalcrudController::class, 'get_byid']);
    Route::post('/global_updatedata', [GlobalcrudController::class, 'update']);
    Route::post('/global_getdata', [GlobalcrudController::class, 'get_data']);
    Route::post('/global_getdatacount', [GlobalcrudController::class, 'count_data']);
    Route::post('/global_getdatawhere', [GlobalcrudController::class, 'get_data_where']);
    Route::post('/global_getdatawhere_first', [GlobalcrudController::class, 'get_data_where_first']);
    Route::post('/validation_global', [GlobalcrudController::class, 'validation_global']);
    Route::post('/global_join_sub', [GlobalcrudController::class, 'global_join_sub']);
    Route::post('/global_join_sub_first', [GlobalcrudController::class, 'global_join_sub_first']);

    Route::get('/global_getdatacount', [GlobalcrudController::class, 'count_data']);
    Route::get('/global_getdatawhere', [GlobalcrudController::class, 'get_data_where']);

    Route::post('/upload', [GlobalcrudController::class, 'upload_photo']);
    Route::post('/upload_base64', [GlobalcrudController::class, 'upload_base64']);


    Route::post('/groupby', [GlobalcrudController::class, 'groupBy']);
    //auth
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/get_data', [Api_Controlleruserprofile::class, 'index']);
    Route::post('/table_info', [ShowalltableController::class, 'table_info']);

// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[UserController::class,'register']);
// Route::post('login',[UserController::class,'login']);

// Route::middleware('auth:api')->group(function () {
    Route::get('user',[UserController::class, 'userDetail']);
    Route::get('get',[GlobalcrudController::class, 'index']);
    Route::post('insert',[GlobalcrudController::class, 'insert']);
    Route::get('show_data',[GlobalcrudController::class, 'show_data']);
    Route::post('update_data',[GlobalcrudController::class, 'update_data']);
    Route::get('delete_data',[GlobalcrudController::class, 'delete']);
    Route::get('all-table',[GlobalcrudController::class, 'all']);


    //logs
    Route::post('insert-log',[LogController::class, 'AddLog']);
    Route::get('log-activity',[LogController::class, 'logActivity']);


// });

Route::post('/login', [AuthController::class, 'index']);

//logs
Route::post('insert-log',[LogController::class, 'AddLog']);
Route::get('log-activity',[LogController::class, 'logActivity']);


Route::get('logout', [UserController::class, 'logout']);

Route::post('/post_notif', [PushnotifController::class, 'sendOfferNotification']);


