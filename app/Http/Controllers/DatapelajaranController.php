<?php

namespace App\Http\Controllers;

use App\Models\X_academic_subject_master;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class DatapelajaranController extends Controller
{
    
    public function data_interval_predikat(Request $request)
    {
        $get_predikat  =  DB::table('x_academic_subject_master_interval')
                              ->select('subject_master_id')
                              ->join('x_academic_subject_master', 'x_academic_subject_master.id', '=', 'x_academic_subject_master_interval.subject_master_id')
                              ->join('x_academic_year', 'x_academic_year.id', '=', 'x_academic_subject_master.academic_year_id')
                              ->groupBy('x_academic_subject_master_interval.subject_master_id')
                              ->where('x_academic_year.institute_id','=',$request->institute_id)
                              ->where('x_academic_subject_master.kkm','!=',null)
                              ->where('x_academic_subject_master.deleted_at','=',null)
                              ->paginate($request->result);
            
            $array = [];
            foreach($get_predikat as $predikat){

                $matpel =  DB::table('x_academic_subject_master')
                             ->where('id',$predikat->subject_master_id)
                            ->first();

                $get_data_interval = DB::table('x_academic_subject_master_interval')
                                     ->where('subject_master_id',$predikat->subject_master_id)
                                     ->first();
        

                $tahun_akademik =  DB::table('x_academic_year')
                            ->where('id',$matpel->academic_year_id)
                           ->first();
                $get_nilai = DB::table('x_academic_subject_master_interval')
                             ->select('x_academic_subject_master_interval.min',         'x_academic_subject_master_interval.max',
                             'x_predikat_name.name as predikat',
                             'x_predikat_name.id as id_predikat',
                             )
                             ->join('x_predikat_name', 'x_academic_subject_master_interval.predikat_id', '=', 'x_predikat_name.id')
                            ->where('subject_master_id',$predikat->subject_master_id)
                            ->get();
                $data = [
                            'matpel' => $matpel->nama_mata,
                            'id_matpel' => $predikat->subject_master_id,
                            'academic_year' =>$tahun_akademik->academic_year,
                            'semester' => $tahun_akademik->semester,
                            'tingkat' => $matpel->tingkat,
                            'updated_at'    => $get_data_interval->updated_at,
                            'kkm_pelajaran'   => $matpel->kkm,
                            'konten'  => $get_nilai
                        ];
                array_push($array,$data);
                
            }
                            
        // $get_pelajaran = DB::table('x_academic_subject_master')
        //                 ->select('x_academic_subject_master.nama_mata',
        //                          'x_academic_year.academic_year',
        //                          'x_academic_year.semester',
        //                          'x_academic_subject_master.tingkat',
        //                          "x_academic_subject_master.kkm"
        //                         )
        //                 ->join('x_academic_year', 'x_academic_subject_master.academic_year_id', '=', 'x_academic_year.id')
        //                 ->where('x_academic_year.institute_id','=',$request->institute_id)
        //                 ->where('x_academic_subject_master.kkm','!=',null)
        //                 ->where('x_academic_subject_master.deleted_at','=',null)
        //                 ->paginate($request->result);
        
        // $array = [];
        // foreach($get_pelajaran as $pelajaran){
        //     $interval = (100 - $pelajaran->kkm ) / 3 ;
        //     $nilai_a = 100 - round($interval);
        //     $nilai_b = ($nilai_a - 1 ) - round($interval);
        //     $nilai_c = ($nilai_b - 1) - round($interval);
        //     $data = [
        //                 'tingkat' => $pelajaran->tingkat,
        //                 'mata_pelajaran' => $pelajaran->nama_mata,
        //                 'tahun_akademik' => $pelajaran->academic_year,
        //                 'semester' => $pelajaran->semester,
        //                 'nilai_a' => $nilai_a." - 100",
        //                 'nilai_b' => $nilai_b." - ".($nilai_a - 1),
        //                 'nilai_c' =>$nilai_c." - ".($nilai_b - 1),
        //             ];
        //         array_push($array,$data);
        // }
        array_multisort(array_column($array, 'updated_at'), SORT_DESC, $array);
            
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $array,
            $get_predikat->total(),
            $get_predikat->perPage(),
            $get_predikat->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $get_predikat->currentPage()
                ]
            ]
        );
    
       return response()->json($itemsTransformedAndPaginated);
       
    }
    public function delete_data_interval_predikat(Request $request){
        $delete_predikat  =  DB::table('x_academic_subject_master_interval')
                                ->where('subject_master_id',$request->id_subject_master)
                                ->delete();  
        return response()->json([
            'status' => true,
        ]);      
    }
    public function update_data_interval_predikat(Request $request)
    {
        $data = ['konten' => "required|array|min:4",
                 'konten.*.min' => "integer|required",
                 'konten.*.max' => "integer|required",
                 'konten.*.predikat' => "required",
                 'konten.*.id_predikat' => "required",
                ];
        $validated = $request->validate($data);   
        foreach($request->konten as $value){
            DB::table('x_academic_subject_master_interval')
                ->where('subject_master_id',$request->id_matpel)
                ->where('predikat_id',$value['id_predikat'])
                ->update([
                         'min' => $value['min'],
                         'max' => $value['max'],
                         ]);
        }

        X_academic_subject_master::where('id',$request->id_matpel)->update(['is_edit' => false]);
        return response()->json(['code' => true,
        'message' => "sukses update data"
       ]);
        // DB::table('x_academic_subject_master_interval')
        //     ->where('')
    }

    public function sikronisasi_data_interval_predikat(Request $request)
    {
     $data = ['institude_id' => "required"];
     $validated = $request->validate($data);
     $data_subject_master = DB::table('x_academic_subject_master')
        ->select('x_academic_subject_master.id as id_subject','x_academic_subject_master.kkm','x_academic_subject_master.is_edit')
        ->join('x_academic_year', 'x_academic_year.id', '=', 'x_academic_subject_master.academic_year_id')
        ->where('x_academic_year.institute_id',$request->institude_id)
        // ->whereNotNull('x_academic_subject_master.updated_at')
        ->whereNotNull('x_academic_subject_master.kkm')
        ->whereNull('x_academic_subject_master.deleted_at')
        ->get();
      foreach($data_subject_master as $value_subject)
      {
        $data_interval =  DB::table('x_academic_subject_master_interval')
                          ->where('subject_master_id',$value_subject->id_subject)
                          ->first();
        if($data_interval == null){
            $interval = (100 - $value_subject->kkm ) / 3 ;
            $interval_pembulatan = round($interval);
            $nilai_d_min = 0;
            $nilai_d_max = $value_subject->kkm - 1;
            $nilai_c_min = $value_subject->kkm;
            $nilai_c_max = $nilai_c_min + $interval_pembulatan;
            $nilai_b_min = $nilai_c_max+1;
            $nilai_b_max = $nilai_b_min + $interval_pembulatan;
            $nilai_a_min =  $nilai_b_max+1;
            $nilai_a_max =  (100 - $nilai_a_min );
            $nilai_a_max_mutlak = $nilai_a_min+$nilai_a_max;
            
            $insert_data =  DB::table('x_academic_subject_master_interval')
                              ->insert([
                                [
                                    'subject_master_id' =>$value_subject->id_subject,
                                    'predikat_id' => 1,
                                    'min' => $nilai_a_min,
                                    'max' => $nilai_a_max_mutlak
                                ],
                                [
                                    'subject_master_id' =>$value_subject->id_subject,
                                    'predikat_id' => 2,
                                    'min' => $nilai_b_min,
                                    'max' => $nilai_b_max
                                ],
                                [
                                    'subject_master_id' =>$value_subject->id_subject,
                                    'predikat_id' => 3,
                                    'min' => $nilai_c_min,
                                    'max' => $nilai_c_max
                                ], [
                                    'subject_master_id' =>$value_subject->id_subject,
                                    'predikat_id' => 4,
                                    'min' => $nilai_d_min,
                                    'max' => $nilai_d_max
                                ],
                              ]);
        }elseif($value_subject->is_edit){
            $data_interval =  DB::table('x_academic_subject_master_interval')
            ->where('subject_master_id',$value_subject->id_subject)
            ->first();
            if($data_interval){
                $interval = (100 - $value_subject->kkm ) / 3 ;
                $interval_pembulatan = round($interval);
                $nilai_d_min = 0;
                $nilai_d_max = $value_subject->kkm - 1;
                $nilai_c_min = $value_subject->kkm;
                $nilai_c_max = $nilai_c_min + $interval_pembulatan;
                $nilai_b_min = $nilai_c_max+1;
                $nilai_b_max = $nilai_b_min + $interval_pembulatan;
                $nilai_a_min =  $nilai_b_max+1;
                $nilai_a_max =  (100 - $nilai_a_min );
                $nilai_a_max_mutlak = $nilai_a_min+$nilai_a_max;
                $delete_data =  DB::table('x_academic_subject_master_interval')
                                ->where('subject_master_id',$value_subject->id_subject)
                                ->delete();
                                $insert_data =  DB::table('x_academic_subject_master_interval')
                                ->insert([
                                  [
                                      'subject_master_id' =>$value_subject->id_subject,
                                      'predikat_id' => 1,
                                      'min' => $nilai_a_min,
                                      'max' => $nilai_a_max_mutlak
                                  ],
                                  [
                                      'subject_master_id' =>$value_subject->id_subject,
                                      'predikat_id' => 2,
                                      'min' => $nilai_b_min,
                                      'max' => $nilai_b_max
                                  ],
                                  [
                                      'subject_master_id' =>$value_subject->id_subject,
                                      'predikat_id' => 3,
                                      'min' => $nilai_c_min,
                                      'max' => $nilai_c_max
                                  ], [
                                      'subject_master_id' =>$value_subject->id_subject,
                                      'predikat_id' => 4,
                                      'min' => $nilai_d_min,
                                      'max' => $nilai_d_max
                                  ],
                                ]);
                               

            }            
        }

      }
      return response()->json(['code' => true,
                               'message' => "sukses sinkronisasi data"
                              ]);
      
    }


}
