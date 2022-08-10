<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Storage;
use App\Models\TempTable;
use App\Models\X_competenceModel;
use App\Models\X_competence_detailModel;
use App\Models\X_academic_yearModel;
use App\Models\X_academic_subjectsModel;
use App\Models\R_expertise_areaModel;
use App\Models\R_expertise_programModel;
use App\Models\R_skill_competenceModel;


class KompetensiController extends Controller
{
    public function index()
    {

      
    }

    public function insert_multiple(Request $request)
    {

       $data = $request->all();
      // print_r($request);
        foreach($data['x_competence'] as $item)
        {
          $data = [
            'academic_year_id' => $item['academic_year_id'],
            'academic_courses_id' => $item['academic_courses_id'],
            'semester' => $item['semester'],
            'expertise_area_id' => $item['expertise_area_id'],
            'expertise_program_id' => $item['expertise_program_id'],
            'skill_compentence_id' => $item['skill_compentence_id'],
            'keterangan' => $item['keterangan'],
            'class_id' => $item['class_id'],
          ];

          DB::table('x_competence')->insert($data);
        }

        $data = $request->all();
        foreach($data['x_competence_detail'] as $item)
        {
          $data = [
            'competence_id' => $item['competence_id'],
            'competence_aspect_id' => $item['competence_aspect_id'],
            'competence_type_id' => $item['competence_type_id'],
            'serial' => $item['serial'],
            'competence_desc' => $item['competence_desc'],
            'competance_target' => $item['competance_target'],
            'code' => $item['code']
          ];

          DB::table('x_competence_detail')->insert($data);
        }

        return response()->json('data sukses insert');

        }
        // $xcom = new X_competenceModel();
        // $xcom->academic_year_id = $request->academic_year_id;
        // $xcom->academic_courses_id = $request->academic_courses_id; 
        // $xcom->semester = $request->semester;
        // $xcom->expertise_area_id = $request->expertise_area_id; 
        // $xcom->expertise_program_id = $request->expertise_program_id;
        // $xcom->skill_compentence_id = $request['x_competence']['skill_compentence_id'];
        // $xcom->keterangan = $request['x_competence']['keterangan'];
        // $xcom->class_id = $request->class_id;
        // $xcom->save();

        // $detail = new X_competence_detailModel();
        // $detail->competence_id = $request->competence_id;
        // $detail->competence_aspect_id = $request->competence_aspect_id;
        // $detail->competence_type_id = $request->competence_type_id;
        // $detail->serial = $request->serial;
        // $detail->competence_desc = $request['x_competence_detail']['competence_desc'];
        // $detail->competance_target = $request['x_competence_detail']['competance_target'];
        // $detail->code = $request->code;
        // $detail->save();

        //dd($request->all());
      
    
      
      // $data = $request->all();
      // foreach($data as $item)
      // {
      //   // Insert....
      //   $data = [
      //     'academic_year_id' => $item['academic_year_id'],
      //     'academic_courses_id' => $item['academic_courses_id'],
      //     // 'expertise_area_id' => $item['expertise_area_id'],
      //     // 'expertise_program_id' => $item['expertise_program_id'],
      //     // 'skill_compentence_id' => $item['skill_compentence_id'],
      //     // 'basic_competence' => $item['basic_competence'],
      //     'semester' => $item['semester'],
      //     'class_id' => $item['class_id']
      //   ];
      //   // dd($request->all());r
      //   \DB::table('x_competence')->insert($data);

      //   $data = [
      //     'competence_id' => $item['competence_id'],
      //     'competence_aspect_id' => $item['competence_aspect_id'],
      //     'competence_desc' => $item['competence_desc'],
      //     'competence_target' => $item['competence_target'],
      //     'code' => $item['code']
      //   ];
      //   // dd($request->all());
      //   \DB::table('x_competence_detail')->insert($data);
      // }
     
      // return response()->json('Data has been created');




      // foreach($request['academic_year_id'] as $index => $name)
      // {
      //   $year = $request['academic_year_id'][$index];
      //   $course = $request['academic_courses_id'][$index];
      //   $expertise = $request['expertise_area_id'][$index];
      //   $program = $request['expertise_program_id'][$index];
        
      //   $competence = $request['skill_compentence_id'][$index];
      //   $basic = $request['basic_competence'][$index];
      //   $semester = $request['semester'][$index];
      //   $keterangan = $request['keterangan'][$index];
        
      //   // Insert....
      //   $data = [
      //     'academic_year_id' => $year,
      //     'academic_courses_id' => $course,
      //     'expertise_area_id' => $expertise,
      //     'expertise_program_id' => $program,
      //     'skill_compentence_id' => $competence,
      //     'basic_competence' => $basic,
      //     'semester' => $semester,
      //     'keterangan' => $keterangan
      //   ];

      //   // dd($data);
      //   \DB::table('x_competence')->insert([
      //     'academic_year_id' => $year,
      //     'academic_courses_id' => $course,
      //     'expertise_area_id' => $expertise,
      //     'expertise_program_id' => $program,
      //     'skill_compentence_id' => $competence,
      //     'basic_competence' => $basic,
      //     'semester' => $semester,
      //     'keterangan' => $keterangan
      //   ]);
      // }

      // return response()->json('Data has been created');





        // $raw_date = $request->tbl_name;

        // $basic = $request->basic_competence;
        // $kode = $request->kode;
        // $semester = $request->semester;
        // $keterangan = $request->keterangan;


        // for ($i=0; $i < count($raw_date); $i++)
        // {
        //     $datasave = [
        //         'academic_year_id' =>  $raw_date['academic_year_id'][$i],
        //         'academic_courses_id' => $raw_date['academic_courses_id'][$i],
        //         'expertise_area_id' =>  $raw_date['expertise_area_id'][$i],
        //         'expertise_program_id' => $raw_date['expertise_program_id'][$i],
        //         'skill_compentence_id' => $raw_date['skill_compentence_id'][$i],
        //         'basic_competence' => $basic[$i],
        //         'kode' => $kode[$i],
        //         'semester' => $semester[$i],
        //         'keterangan' => $keterangan[$i]
        //     ];
            
        //     DB::table('x_competence')->insert($datasave);
        // }
        // return response()->json([
        //     'status'    => 'error',
        //     'message'   => 'data berhasil insert',
        // ], 500);

        // $kompetensi = new X_competenceModel();
        // $kompetensi->academic_year_id = $request->academic_year_id;
        // $kompetensi->academic_courses_id = $request->academic_courses_id;
        // $kompetensi->expertise_area_id = $request->expertise_area_id;
        // $kompetensi->expertise_program_id = $request->expertise_program_id;
        // $kompetensi->skill_compentence_id = $request->skill_compentence_id;
        // $kompetensi->basic_competence = $request->basic_competence;
        // $kompetensi->kode = $request->kode;
        // $kompetensi->semester = $request->semester;
        // $kompetensi->keterangan = $request->keterangan;
        // $kompetensi->save();
     
        // dd($request->all());
        // foreach($request->input('tbl_coloumn', []) as $key -> $value){
        //    $year = array(
        //      'academic_year_id' => $kompetensi->id,
        //      'academic_courses_id' => $kompetensi->id,
        //      'expertise_area_id' => $kompetensi->id,
        //      'expertise_program_id' => $kompetensi->id,
        //      'skill_compentence_id' => $kompetensi->id,
        //      'basic_competence' => $value['basic_competence'],
        //      'kode' => $value['kode'],
        //      'semester' => $value['semester'],
        //      'keterangan' => $value['keterangan']
        //    );
        //     $year = X_academic_yearModel::create($year);
           
            
        // }
        //    return response()->json([
        //  'message' => 'success'
        //    ], 200);	
}


