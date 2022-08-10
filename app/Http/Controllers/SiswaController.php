<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaPostRequest;
use App\Models\M_user_parentsModel;
use App\Models\M_user_profileModel;
use App\Models\UsersModel;
use App\Models\X_academic_studentsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check_email = UsersModel::where('email',$request->email)->first();
        
        if($check_email){
            return response()->json(['status' => 422,
                                     'message' => 'email telah di gunakan'
                                    ]);
        }else{
            DB::beginTransaction();
            try {
               
                
            $data_siswa = [
                'name' => $request->nama_siswa,
                'email' => $request->email,
                'user_role_id' => 3,
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
            ];
            $user_id = UsersModel::insertGetId($data_siswa);  

            // dd($data_siswa);

            // $image = $request->file('image');
            // if($image != ''){
            //     $image->storeAs('profile_user', $image->hashName());
            //     $namafile = 'foto_siswa/'.$image->hashName();
    
            // }else{
            //     $namafile = "";
            // }
            
         $file = base64_decode($request->image);
         $safeName = Str::random(20).'.'.$request->image_type;
         Storage::disk('local')->put('image_siswa/'.$safeName,$file);
        //  $success = file_put_contents(public_path().'/storage/image_siswa/'.$safeName, $file);

            $data_profile = [
                                'image' => 'image_siswa/'.$safeName,
                                'nisn' => $request->nisn,
                                'user_id' => $user_id,
                                'place_of_birth' => $request->tempat_lahir,
                                'date_of_birth' => $request->tanggal_lahir,
                                'mobile_phone'  => $request->no_hp,
                                'state_id' => $request->provinsi,
                                'city_id' => $request->kota,
                                'district_id' => $request->kecamatan,
                                'sub_discrict_id' => $request->kelurahan,
                                'address'   => $request->alamat
                            ];

            $user_profile = M_user_profileModel::insert($data_profile);


            $academic_student = X_academic_studentsModel::insert([
                'academic_year_id' => $request->academic_year_id,
                'user_id'          => $user_id,
                'register_date'    => date('Y-m-d H:i:s'),
                'student_status_id' => 1,
                'class_id'          => $request->id_class 
            ]);


            $ortu_email = UsersModel::updateOrCreate(
                [
                    'email' =>  $request->email_ortu
                ],
                ['name' => $request->nama_ortu,
                'user_role_id' => 4,
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => Hash::make('password'),
                ]);

                $user_id_ortu = UsersModel::where('email',$request->email_ortu)->first()->id;
              
                $data_profile_ortu = [
                    'user_id' => $user_id_ortu,
                    'place_of_birth' => $request->tempat_lahir_ortu,
                    'date_of_birth' => $request->tanggal_lahir_ortu,
                    'mobile_phone'  => $request->no_hp_ortu,
                    'state_id' => $request->provinsi_ortu,
                    'city_id' => $request->kota_ortu,
                    'district_id' => $request->kecamatan_ortu,
                    'sub_discrict_id' => $request->kelurahan_ortu,
                    'address'   => $request->alamat_ortu
                ];
                $user_profile = M_user_profileModel::insert($data_profile_ortu);
                
                $user_parents = M_user_parentsModel::insert([
                    'user_id' => $user_id,
                    'parent_id' => $user_id_ortu,
                    'profession' => $request->profesi_ortu,
                    "nik" => $request->nik
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


        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
