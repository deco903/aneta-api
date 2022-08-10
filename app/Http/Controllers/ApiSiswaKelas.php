<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Models\X_academic_studentsModel;
use App\Models\X_academic_subjects_schedule_contents;
use App\Models\X_academic_subjects_scheduleModel;
use App\Models\X_academic_subjectsModel;
use App\Models\X_academic_teachersModel;
use App\Models\X_academic_yearModel;
use Illuminate\Http\Request;

class ApiSiswaKelas extends Controller
{
    public function mata_pelajaran(Request $request)
    {
        
        $idkelas = X_academic_studentsModel::where('user_id',$request->id_user)
                                            ->first()->class_id ?? null;

    
        $get_matpel = X_academic_subjectsModel::select('x_academic_subject_master.*',
        'x_academic_subjects.*',
        'x_academic_class.*',
        'x_academic_subjects.id as id_subjek'

        )->
        join('x_academic_subject_master', 'x_academic_subject_master.id', '=', 'x_academic_subjects.academic_subjects_master_id')
        // ->join('x_academic_subjects_schedule', 'x_academic_subjects_schedule.academic_subjects_id', '=', 'x_academic_subjects.id')
        ->join('x_academic_class', 'x_academic_class.id', '=', 'x_academic_subjects.course_grade_id')
        ->where('x_academic_subjects.course_grade_id',$idkelas)
        ->where('x_academic_subjects.academic_year_id',$request->academic_id)
        ->whereNull('x_academic_subjects.deleted_at')
        ->whereNull('x_academic_subject_master.deleted_at')
        ->where('x_academic_subjects.academic_year_id',$request->academic_id)
        ->get();

        $array_data = [];
        foreach($get_matpel as $matpel)
        {
            $get_tahun_akademik = X_academic_yearModel::where('id',$request->academic_id)->first();

            $get_teacher = X_academic_teachersModel::where('id',$matpel->teachers_id)->first()->user_id ?? null;

            $get_schedule = X_academic_subjects_scheduleModel::where('academic_subjects_id',$matpel->id_subjek)->get();

            $count_materi= 0;
            foreach($get_schedule as $schedule){
                $count_materi += X_academic_subjects_schedule_contents::where('subjects_content_type_id',1)
                ->where('subjects_schedule_id',$schedule->id)->count(); 
             
            }

            $count_tugas= 0;
            foreach($get_schedule as $schedule){
                $count_tugas += X_academic_subjects_schedule_contents::Orwhere('subjects_content_type_id',2)
                ->Orwhere('subjects_content_type_id',3)
                ->where('subjects_schedule_id',$schedule->id)->count(); 
             
            }
        
            
            

            $nama_guru = UsersModel::where('id',$get_teacher)->first();

            $data = [
                        'pelajaran' => $matpel->nama_mata,
                        'kelas'     => $matpel->class.' '.$matpel->sub_class,
                        'semester'  => $get_tahun_akademik->semester,
                        'pengajar'  =>  $nama_guru->name ?? null,
                        'materi'    => $count_materi,
                        'tugas'     => $count_tugas
                    ];
            array_push($array_data,$data);
        }

        if(count($array_data) > 0 ){
            return response()->json([
                'code'  => true,
                'data'  => $array_data
            ]);
        }else{
            return response()->json([
                'code'  => false,
                'data'  => null
            ]);
        }
        

    }
}
