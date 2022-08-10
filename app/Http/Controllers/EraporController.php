<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Models\X_academic_subject_master;
use App\Models\X_academic_subjects_scheduleModel;
use App\Models\X_academic_subjectsModel;
use App\Models\X_academic_teachersModel;
use App\Models\X_assessment_header;
use App\Models\X_assessment_planing;
use Illuminate\Http\Request;

class EraporController extends Controller
{
    public function get_status_penilian(Request $request)
    {
        $get_hedaer = X_assessment_header::where('academic_year_id',$request->academic_year)
        ->where('class_id',$request->id_class)
        ->get();
        $dt_array = [];
        foreach($get_hedaer as $header)
        {
            $subject_id = X_academic_subjectsModel::where('id',$header->subjects_id)
                                                    ->first() ?? null;
         

            $nama_matapelajaran = X_academic_subject_master::where('id',$subject_id->academic_subjects_master_id)->first() ?? null;

            

            $teacher_id = X_academic_subjects_scheduleModel::where('academic_subjects_id',$subject_id->id)->first();

          
            

            $teacher = X_academic_teachersModel::where('id',$teacher_id->teachers_i ?? null)->first();

            
            $user = UsersModel::where('id',$teacher->user_id ?? null)->first();

        
            $pengetahuan = X_assessment_planing::join('x_assessment_actual','x_assessment_actual.assessment_planing_id','=','x_assessment_planing.id')->where('x_assessment_planing.competence_aspect_id',1)
            ->where('x_assessment_planing.assessment_header_id',$header->id)
            ->first();
            if($pengetahuan){
                $pengetahuan = true;
            }else{
                $pengetahuan = false;
                }

            $keterampilan = X_assessment_planing::join('x_assessment_actual','x_assessment_actual.assessment_planing_id','=','x_assessment_planing.id')->where('x_assessment_planing.competence_aspect_id',2)
            ->where('x_assessment_planing.assessment_header_id',$header->id)
            ->first();
            if($keterampilan){
                $keterampilan = true;
            }else{
                $keterampilan = false;
            }
    
            $sikap_spiritual = X_assessment_planing::join('x_assessment_planing_competence_check','x_assessment_planing_competence_check.assessment_planning_id','=','x_assessment_planing.id')
            ->join('x_assessment_actual_by_competance','x_assessment_actual_by_competance.assessment_planing_competence_check_id','=','x_assessment_planing_competence_check.id')
            ->where('x_assessment_planing.competence_aspect_id',3)
            ->where('x_assessment_planing.assessment_header_id',$header->id)
            ->first();

            if($sikap_spiritual){
                $sikap_spiritual = true;
            }else{
                $sikap_spiritual = false;
            }

            $sikap_social = X_assessment_planing::join('x_assessment_planing_competence_check','x_assessment_planing_competence_check.assessment_planning_id','=','x_assessment_planing.id')
            ->join('x_assessment_actual_by_competance','x_assessment_actual_by_competance.assessment_planing_competence_check_id','=','x_assessment_planing_competence_check.id')
            ->where('x_assessment_planing.competence_aspect_id',4)
            ->where('x_assessment_planing.assessment_header_id',$header->id)
            ->first();

            if($sikap_social){
                $sikap_social = true;
            }else{
                $sikap_social = false;
            }


            $data = [
                        'nama_mata_pelajaran' => $nama_matapelajaran->nama_mata,
                        'nama_pendidik'       => $user->name ?? null,
                        'pengetahuan'       => $pengetahuan,
                        'keterampilan'       => $keterampilan,
                        'sikap_spirital'     => $sikap_spiritual,
                        'sikap_social'      => $sikap_social,
                        'finalisasi'        => $header->is_value_sent,
                        'deskripsi'         => $header->is_desc_sent
                    ];
            array_push($dt_array,$data);
        }
        if(count($dt_array) > 0){
            return response()->json([
                'code'  => true,
                'data'  => $dt_array
            ]);
        }else{
            return response()->json([
                'code'  => false,
                'data'  => null
            ]);

        }
       
    } 
}
