<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\UsersModel;
use App\Models\M_user_profileModel;
use App\Models\X_academic_teachersModel;
use Illuminate\Support\Str;


class GuruController extends Controller
{
    public function index()
    {

    }

    public function store(Request$request)
    {

        $check_email = UsersModel::where('email',$request->email)->first();

        if($check_email){
            return response()->json(['status' => 422,
                                     'message' => 'email telah di gunakan'
                                    ]);
        }else{
            DB::beginTransaction();
            try {

            $dataGuru = [
                'name' => $request->nama_guru,
                'email' => $request->email,
                'user_role_id' => 2,
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
            ];
            $user_id = UsersModel::insertGetId($dataGuru);  

            
         $file = base64_decode($request->image);
         $safeName = Str::random(20).'.'.$request->image_type;
         Storage::disk('local')->put('image_guru/'.$safeName,$file);
        //  $success = file_put_contents(public_path().'/storage/image_siswa/'.$safeName, $file);

            $dataGuru = [
                                'image' => 'image_guru/'.$safeName,                                
                                'user_id' => $user_id,
                                'date_of_birth' => $request->tanggal_lahir,
                                'mobile_phone'  => $request->no_hp,
                                'state_id' => $request->provinsi,
                                'city_id' => $request->kota,
                                'district_id' => $request->kecamatan,
                                'sub_discrict_id' => $request->kelurahan,
                                'address'   => $request->alamat
                            ];

            $user_profile = M_user_profileModel::insert($dataGuru);


            $academic_student = X_academic_teachersModel::insert([
                'academic_year_id' => $request->academic_year_id,
                'user_id'          => $user_id,
                'teach_class_id'   => $request->teach_class_id,
                'register_date'    => date('Y-m-d H:i:s'),
                'teacher_status_id' => 1,
                'is_online'        => true,
                'sk_number'         => $request->sk_number,
                'sk_date'          => date('Y-m-d H:i:s') 
            ]);

             
                DB::commit();
                return response()->json(['status' => 200,
                'message' => 'Sucess']);
            } catch (Exception $e) {
                // Rollback Transaction
                DB::rollback();
                return response()->json(['status' => 400,
                'message' => $e]);
                // ada yang error
              }
           }
    }
}
