<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Models\X_academic_studentsModel;
use App\Models\X_academic_subjects_scheduleModel;
use App\Models\X_academic_teachersModel;
use Illuminate\Http\Request;

class ApiSiswaJadwalPelajaran extends Controller
{
    public function get_pelajaran_ongoing(Request $request)
    {
        $get_class_user = X_academic_studentsModel::where('academic_year_id',$request->academic_id)
        ->where('user_id',$request->user_id)
        ->first()->class_id ?? null;

        $get_hari =  X_academic_subjects_scheduleModel::select('x_academic_subjects_schedule.hari')
        ->join('x_academic_subjects', 'x_academic_subjects.id', '=', 'x_academic_subjects_schedule.academic_subjects_id')
        ->join('x_academic_subject_master', 'x_academic_subject_master.id', '=', 'x_academic_subjects.academic_subjects_master_id')
        ->where('x_academic_subjects.course_grade_id','=',$get_class_user)
        // ->where('x_academic_subjects_schedule.hari',$request->hari)
        ->whereNull('x_academic_subjects_schedule.deleted_at')
        ->whereNull('x_academic_subjects.deleted_at')
        ->whereNull('x_academic_subjects_schedule.deleted_at')
        ->whereNull('x_academic_subject_master.deleted_at')
        ->groupBy('x_academic_subjects_schedule.hari')
        ->get();
        $dt_array = [];
        foreach($get_hari as $haris)
        {
            
            $get_pelajaran = X_academic_subjects_scheduleModel::join('x_academic_subjects', 'x_academic_subjects.id', '=', 'x_academic_subjects_schedule.academic_subjects_id')
            ->join('x_academic_subject_master', 'x_academic_subject_master.id', '=', 'x_academic_subjects.academic_subjects_master_id')
            ->where('x_academic_subjects.course_grade_id','=',$get_class_user)
            ->where('x_academic_subjects_schedule.hari',$haris->hari)
            ->whereNull('x_academic_subjects_schedule.deleted_at')
            ->whereNull('x_academic_subjects.deleted_at')
            ->whereNull('x_academic_subjects_schedule.deleted_at')
            ->whereNull('x_academic_subject_master.deleted_at')
            ->get();

            $dt_array_data = [];
            foreach($get_pelajaran as $pelajaran)
            {
                $table_teacher = X_academic_teachersModel::where('id',$pelajaran->teachers_id)->first()->user_id ?? null; 
                $get_guru = UsersModel::where('id',$table_teacher)->first()->name ?? null;
                $data = [
                
                    'code_pelajaran' => $pelajaran->code,
                    'mata_pelarajan' => $pelajaran->nama_mata,
                    'jam_mulai'     => $pelajaran->time_start.' - '.$pelajaran->time_end,
                    'nama_guru' => $get_guru,
                    'tempat_belajar' => $pelajaran->tempat_belajar,
                    'hari'          => $pelajaran->hari
                
                
                ];
                array_push($dt_array_data,$data);
            }
            
           $data = [
                     'hari' => $haris->hari,
                     'data' => $dt_array_data,
                    ];
            array_push($dt_array,$data);
        }


       
        if(count($dt_array) > 0)
        {
            return response()->json(['code' => true,
            'data' => $dt_array
            ]);
        }else
        {
            return response()->json(['code' => false,
            'data' => null
            ]);
        }

    }                                            
}
