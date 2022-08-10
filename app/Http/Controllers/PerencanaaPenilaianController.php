<?php

namespace App\Http\Controllers;

use App\Models\X_assessment_header;
use App\Models\X_assessment_planing;
use App\Models\X_assessment_planing_competence_check;
use App\Models\X_competence_detailModel;
use App\Models\X_competenceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerencanaaPenilaianController extends Controller
{
    public function input(Request $request)
    {
        $data = [
            'class_id'  => "required",
            'kompetensi' => "required|array|min:1",
            'kompetensi.*.detail_id' => "required",
            'kompetensi.*.penilaian' => "required",
            'kompetensi.*.check' => "required"
           ];
           $validated = $request->validate($data);   

        try {
            DB::beginTransaction();

         $check_header = X_assessment_header::where('academic_year_id',$request->academic_id)
         ->where('class_id', $request->class_id)
         ->where('subjects_id', $request->subjects_id)
         ->first();
         if($check_header)
         {
            $header = $check_header->id;
         }else
         {
        $header = X_assessment_header::insertGetId([
                                                'academic_year_id'  => $request->academic_id,
                                                'class_id'  => $request->class_id,
                                                'subjects_id'   => $request->subjects_id,
                                                'created_by'    => $request->created_by
                                             ]);
        }
    
      
            $array_planing = $request->planing;
            $dt_array=[];
            foreach($array_planing as $planing_array=>$value)
            {
                
                $planing = X_assessment_planing::updateOrInsert(
                    [
                    'assessment_header_id' => $header,
                    'competence_aspect_id'  => $value['competence_aspect_id'],
                    'serial'    => $value['serial']
                    ],
                    [
                    'assessment_technique_id' => $value['assessment_technique_id'],
                    'assessment_bobot'  => $value['assessment_bobot'],
                    'assessment_name' => $value['assessment_name']
                    ]
                  );
                $planing_id =  X_assessment_planing::where('assessment_header_id',$header)
                                                     ->where('competence_aspect_id',$value['competence_aspect_id'])
                                                     ->where('serial',$value['serial'])
                                                     ->first();
                //   for($i=1;$i<= $request->jumlah_penilaian;$i++){
                   
                  
                array_push($dt_array,$planing_id->id);
                  
                //   $array_kompetensi = $request->planing[$planing_array]['kompetensi_dasar'];
            
                //   foreach($array_kompetensi as $kompetensi)
                //   {
                
                //     $kompetensi_detail = X_competence_detailModel::
                //     select('x_competence_detail.id as id_detail','x_competence_detail.competence_desc')
                //     ->join('x_competence','x_competence.id','=','x_competence_detail.competence_id')
                //     ->where('x_competence.academic_courses_id',$request->subjects_id)
                //     ->where('x_competence_detail.competence_aspect_id',$request->competence_aspect_id)
                //     ->orderBy('x_competence_detail.competence_desc','asc')
                //     ->get();
                    
                    
                //     // foreach($kompetensi_detail as $detail)
                //     // {
    
                //     //     $competence_check = X_assessment_planing_competence_check::
                //     //     insert(
                //     //          [
                //     //             'assessment_planning_id' => $planing,
                //     //             'competence_detail_id'   => $detail->id_detail,
                //     //             'is_checked'             => $kompetensi['check'],
            
                //     //          ]);
                //     // }
                   
                //   }
                 
              
            }

            $kompetensi = $request->kompetensi;
            // for($i=1;$i <= $request->jumlah_penilaian;$i++)
            // {
                
            
            foreach($kompetensi as $kompoten)
            {
                
                $planing_akhir = $dt_array[$kompoten['penilaian']-1];
                    
                
                $competence_check = X_assessment_planing_competence_check::
                updateOrInsert(
                             [
                                'assessment_planning_id' => $planing_akhir,
                                'competence_detail_id'   => $kompoten['detail_id'],
                             ],
                             [
                                'is_checked'             => $kompoten['check'],
            
                             ]);
            }

            // }


           
            DB::commit();
            return response()->json([
                'code'    => 'true',
                'message'   => 'succes insert '
                ]
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500);
        }
          
    }
    public function input_bobot(Request $request)
    {
        $get_data = X_assessment_header::where('academic_year_id',$request->id_academic)
        ->where('class_id',$request->id_class)
        ->where('subjects_id',$request->id_pelajaran)
        ->first();      
        if($get_data)
        {
            $update_data = X_assessment_header::where('id',$get_data->id)
            ->update([
                        'bobot' => $request->ph.':'.$request->pts.':'.$request->pas
                    ]);  
            return response()->json([
                'code' => true,
                'message'  => 'success input'
            ]);
        }else{
            return response()->json([
                'code' => false,
                'message'  => null
            ]);
        }
     
    }
}
