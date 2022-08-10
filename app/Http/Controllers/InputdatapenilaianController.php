<?php

namespace App\Http\Controllers;

use App\Models\X_academic_studentsModel;
use App\Models\X_academic_subject_master;
use App\Models\X_academic_subjectsModel;
use App\Models\X_assessment_actual;
use App\Models\X_assessment_actual_by_competance;
use App\Models\X_assessment_actual_exam;
use App\Models\X_assessment_header;
use App\Models\X_assessment_planing;
use App\Models\X_assessment_planing_competence_check;
use App\Models\X_competence_detailModel;
use Illuminate\Http\Request;

class InputdatapenilaianController extends Controller
{
    public function get_data(Request $request)
    {
        $get_data_header = X_assessment_header::select('x_assessment_header.id as id_header','x_assessment_header.subjects_id')
        ->where('academic_year_id',$request->academic_year_id)
        ->join('x_assessment_planing','x_assessment_planing.assessment_header_id' ,'=','x_assessment_header.id')
        ->where('competence_aspect_id',$request->competence_aspect_id)
        ->where('class_id',$request->class_id)
        ->where('subjects_id',$request->subjects_id)
        ->first();

        if($get_data_header){
            $pelajaran = X_academic_subjectsModel::where('id',$get_data_header->subjects_id)->first();

            $get_student = X_academic_studentsModel::select('x_academic_students.id as id_student','users.name as nama_siswa')->join('users','x_academic_students.user_id' ,'=','users.id')->
            where('class_id',$pelajaran->course_grade_id)->get();



            $count_assesment_planing = X_assessment_planing::select('id','serial')->where('assessment_header_id',$get_data_header->id_header)
            ->where('competence_aspect_id',$request->competence_aspect_id)
            ->count();

            $assesment_planing = X_assessment_planing::select('id','serial')->where('assessment_header_id',$get_data_header->id_header)
            ->where('competence_aspect_id',$request->competence_aspect_id)
            ->orderBy('x_assessment_planing.serial','ASC')
            ->get();
                $data = [
                            'siswa' => $get_student,
                            'count_p' => $assesment_planing,
                            'jumlah' => $count_assesment_planing
                        ];
            
            
          
            // $count_p = X_assessment_planing::where('assessment_header_id',$get_data_header->id_header)->count();

           

        

            return response()->json(['status' => 200,
                                     'data' => $data
                                    ]);
        }else{
            return response()->json(['status' => 401,
            'data' => null
           ]);
        }
        
    }


    

    public function insert_datanilai(Request $request)    
    {
        // $data = [
        //         [
        //             'assessment_planing_id' =>5,
        //             'given_value' => 70,
        //             'serial'    => 1,
        //             'student_id'  => 53
        //         ],[
        //             'assessment_planing_id' =>6,
        //             'given_value' => 70,
        //             'serial'    => 1,
        //             'student_id'  => 54
        //         ],[
        //             'assessment_planing_id' =>7,
        //             'given_value' => 70,
        //             'serial'    => 1,
        //             'student_id'  => 55
        //         ]
        //         ];
        foreach($request->data as $datas){
            X_assessment_actual::updateOrInsert(
                ['assessment_planing_id' => $datas['assessment_planing_id'], 
                'student_id' => $datas['student_id']
                ],
                ['serial' => $datas['serial'],
                 'given_value' => $datas['given_value']
                ]
            );
        }
        return response()->json(['code' => true,
                                'message' => "sukses insert data"
       ]);
    }

    public function get_nilaipts_pas(Request $request)
    {
        
        $get_data_header = X_assessment_header::select('x_assessment_header.id as id_header','x_assessment_header.subjects_id')
        ->where('academic_year_id',$request->academic_year_id)
        ->join('x_assessment_planing','x_assessment_planing.assessment_header_id' ,'=','x_assessment_header.id')
        ->where('class_id',$request->class_id)
        ->where('subjects_id',$request->subjects_id)
        ->first();

        if($get_data_header){ 
            $get_student = X_academic_studentsModel::select('x_academic_students.id as id_student','users.name as nama_siswa')->join('users','x_academic_students.user_id' ,'=','users.id')->
            where('class_id',$request->class_id)->get();
            
            return response()->json(['status' => 200,
                                    'header_id' => $get_data_header->id_header,
                                     'data' => $get_student
                                    ]);
        }
    }
    public function insert_pts_pas(Request $request)
    {
        foreach($request->data as $data)
        {
            X_assessment_actual_exam::updateOrInsert(
                ['assessment_header_id' => $data['assessment_header_id'], 
                'exam_type_id' => $data['exam_type_id'],
                'student_id'   => $data['student_id']
                ],
                ['given_value' => $data['given_value']
                ]
            );
        }
        return response()->json(['code' => true,
                                'message' => "sukses insert data"
       ]);
    }

    public function getInputNilaiSpiritualDanSocial(Request $request)
    {
        $get_data_header = X_assessment_header::select('x_assessment_header.id as id_header','x_assessment_header.subjects_id')
        ->where('academic_year_id',$request->academic_year_id)
        ->join('x_assessment_planing','x_assessment_planing.assessment_header_id' ,'=','x_assessment_header.id')
        ->where('competence_aspect_id',$request->competence_aspect_id)
        ->where('class_id',$request->class_id)
        ->where('subjects_id',$request->subjects_id)
        ->orderBy('x_assessment_header.id','DESC')
        ->first();
        if($get_data_header)
        {
            $get_student = X_academic_studentsModel::select('x_academic_students.id as id_student','users.name as nama_siswa')->join('users','x_academic_students.user_id' ,'=','users.id')->
            where('class_id',$request->class_id)->get();

           
           $get_planing = X_assessment_planing::select('id')->where('assessment_header_id',$get_data_header->id_header)->where('competence_aspect_id',$request->competence_aspect_id)->get();
           
          // dd($get_planing);
            $kompetensi_detail = X_assessment_planing_competence_check::
                select('x_assessment_planing_competence_check.id as id_check','x_competence_detail.competence_desc')
                ->join('x_competence_detail','x_competence_detail.id','=','x_assessment_planing_competence_check.competence_detail_id')
                ->join('x_competence','x_competence.id','=','x_competence_detail.competence_id')
                ->whereIn('x_assessment_planing_competence_check.assessment_planning_id',$get_planing)
                ->where('x_assessment_planing_competence_check.is_checked','T')
                ->get();
            
            $count_kompetensi_detail = X_assessment_planing_competence_check::
                select('x_assessment_planing_competence_check.id as id_check','x_competence_detail.competence_desc')
                ->join('x_competence_detail','x_competence_detail.id','=','x_assessment_planing_competence_check.competence_detail_id')
                ->join('x_competence','x_competence.id','=','x_competence_detail.competence_id')
                ->whereIn('x_assessment_planing_competence_check.assessment_planning_id',$get_planing)
                ->where('x_assessment_planing_competence_check.is_checked','T')
                ->count();
                

            return response()->json(['status' => 200,
             'data' => [
                         'siswa' => $get_student,
                         'kompetensi' => $kompetensi_detail,
                         'jumlah'   => $count_kompetensi_detail
                       ] 
            ]);



        }else{
            return response()->json(['status' => 401,
            'data' => null
           ]);
        }

    }
    public function insertInputNilaiSpiritualDanSocial(Request $request)
    {
        foreach($request->data as $datas){
            X_assessment_actual_by_competance::updateOrInsert(
                ['assessment_planing_competence_check_id' => $datas['id_check'], 
                'student_id' => $datas['student_id']
                ],
                ['indicator_id' => $datas['indicator_id'],
                 'created_by' => $datas['created_by']
                ]
            );
        }
        return response()->json(['code' => true,
                                'message' => "sukses insert data"
       ]);
    }
}
