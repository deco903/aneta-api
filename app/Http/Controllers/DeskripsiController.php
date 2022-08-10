<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\R_competence_aspectModel;
use Illuminate\Support\Facades\DB;

class DeskripsiController extends Controller
{

   public function get(Request $request)
   {
         $request->all();

        $datajoin = DB::table('x_assessment_actual_desc')
            ->join('x_academic_students', 'x_academic_students.id', '=', 'x_assessment_actual_desc.student_id')
            ->join('x_assessment_header', 'x_assessment_header.id', '=', 'x_assessment_actual_desc.assessment_header_id')
            ->join('users', 'users.id', '=', 'x_academic_students.user_id')
            ->join('r_competence_aspect', 'r_competence_aspect.id', '=', 'x_assessment_actual_desc.competence_aspect_id')
            ->join('x_academic_class', 'x_academic_class.id', '=', 'x_academic_students.class_id')
            ->join('x_academic_subjects', 'x_academic_subjects.id', '=', 'x_assessment_header.subjects_id')
            ->where('x_assessment_header.class_id', '=', '86')
            ->where('x_assessment_header.subjects_id', '=', '219')
            ->select('x_assessment_actual_desc.competence_aspect_id','x_assessment_actual_desc.id as Idassesment','users.id as Idsiswa','users.name as namasiswa', 'x_assessment_actual_desc.given_value as nilai', 'r_competence_aspect.id', 'r_competence_aspect.competence_aspect', 'x_assessment_actual_desc.given_description', 'x_assessment_header.class_id','x_assessment_header.subjects_id')
            ->get();

            // $test = $datajoin->json();
  
                dd($datajoin);
            $push = [];
             foreach($datajoin ->get as $res){
                  foreach($datajoin as $val){
                        $detail = [
                                "AspectId" => $val->competence_aspect_id,
                                "DescriptionAspect" => $val->competence_aspect,
                                "Nilai"=> $val->nilai,
                                "NilaiDesc"=> $val->given_description
                        ];
                  }
                  
                $data = [
                    "Idassesment" => $res->Idassesment,
                    "Idsiswa" => $res->Idsiswa,
                    "Nama"=> $res->namasiswa,
                    "ClassId"=> $res->class_id,
                    "MapelId"=> $res->subjects_id,
                    "Data"=> $push
                  ];
                  array_push($push,$data);
            }
                    
            // dd($data);
        
         return response()->json($push);

   }

    public function update_deskripsi(Request $request)
    {
        // $data = R_competence_aspectModel::find($id);
        $data = $request->all();
        foreach($data as $item)
        {
        //   $data_update = DB::table('x_assessment_actual_desc')->where('assessment_header_id',$item['assessment_header_id'])
        //   ->where('student_id',$item['student_id'])
        //   ->where('competence_aspect_id',$item['competence_aspect_id'])
        $item['given_description'] = $item['desc_pengetahuan'] . " " .$item['desc_keterampilan'];
        $data_update = DB::table('x_assessment_actual_desc')->where('id',$item['id'])->update([
              // 'assessment_header_id' => $item['assessment_header_id'],
              // 'student_id' => $item['student_id'],
              // 'given_value' => $item['given_value'],
              // 'avg_actual_value' => $item['avg_actual_value'], 
              'given_description' => $item['given_description'],
              // 'created_by' => $item['created_by'],
              // 'competence_aspect_id' => $item['competence_aspect_id']
          ]);
        // dd($data_update);
        //   dd($request->all()); 
        }

        return response()->json('Data has been created');

    //    $data = $request->all();
    //     $data = [
    //         ,
    //         ['given_description']
    //     ];
        
    //     // dd($data);
    //     // Model::insert($data); // Eloquent approach
    //     DB::table('x_assessment_actual_desc')->insert($data); // Query Builder approach

        
        
    }
}
