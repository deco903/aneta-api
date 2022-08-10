<?php

namespace App\Http\Controllers;

use App\Models\X_academic_subject_master;
use App\Models\X_assessment_actual;
use App\Models\X_assessment_header;
use App\Models\X_assessment_planing;
use Illuminate\Http\Request;

class CapaianPenilaianController extends Controller
{
    public function pencapaian_penilaian(Request $reqeust)
    {
        if($reqeust->class_id){
            $data_header = X_assessment_header::with('academic_year','class','subjects')->where('academic_year_id',$reqeust->academic_year)
            ->where('class_id',$reqeust->class_id)
            ->paginate(10);
        }else{
            $data_header = X_assessment_header::with('academic_year','class','subjects')->where('academic_year_id',$reqeust->academic_year)->paginate(10);
        }


        $array = [];

        foreach($data_header as $data_headers)
        {
            $get_first_matpel = X_academic_subject_master::where('id',$data_headers->subjects->academic_subjects_master_id)->first();

            $count_perencanaan_peng = X_assessment_planing::where('assessment_header_id',$data_headers->id)->where('competence_aspect_id',1)->count();

            $count_perencanaan_ket = X_assessment_planing::where('assessment_header_id',$data_headers->id)->where('competence_aspect_id',2)->count();

            $count_perencanaan_skp = X_assessment_planing::where('assessment_header_id',$data_headers->id)->where('competence_aspect_id',3)->count();

            $count_perencanaan_sos = X_assessment_planing::where('assessment_header_id',$data_headers->id)->where('competence_aspect_id',4)->count();

            $count_penilaian_peng = X_assessment_actual::join('x_assessment_planing', 'x_assessment_planing.id', '=', 'x_assessment_actual.assessment_planing_id')->where('x_assessment_planing.competence_aspect_id',1)->count();

            $count_penilaian_ket = X_assessment_actual::join('x_assessment_planing', 'x_assessment_planing.id', '=', 'x_assessment_actual.assessment_planing_id')->where('x_assessment_planing.competence_aspect_id',2)->count();

            
            $count_penilaian_skp = X_assessment_actual::join('x_assessment_planing', 'x_assessment_planing.id', '=', 'x_assessment_actual.assessment_planing_id')->where('x_assessment_planing.competence_aspect_id',3)->count();

            $count_penilaian_sos = X_assessment_actual::join('x_assessment_planing', 'x_assessment_planing.id', '=', 'x_assessment_actual.assessment_planing_id')->where('x_assessment_planing.competence_aspect_id',4)->count();
            
            $output = [
                        'kelas' => $data_headers->class->class,
                        'mata_pelajaran' => $get_first_matpel->nama_mata,
                        'kkm'   => $data_headers->kkm_value,
                        'perencanaan_peng' => $count_perencanaan_peng,
                        'perencanaan_ket'  => $count_perencanaan_ket,
                        'perencanaan_skp'  => $count_perencanaan_skp,
                        'perencanaan_sos'  => $count_perencanaan_sos,
                        'bobot'            => $data_headers->bobot,
                        'penilaian_peng'   => $count_penilaian_peng,
                        'penilaian_ket'    => $count_penilaian_ket,
                        'penilaian_skp'    => $count_penilaian_skp,
                        'penilaian_sos'    => $count_penilaian_sos,
                        'pts'              => $data_headers->is_mid_smt_done,
                        'pas'              => $data_headers->is_end_smt_done,
                        'kirim_nilai'      => $data_headers->is_value_sent,
                        'deskripsi'        => $data_headers->is_desc_sent

                      ];
            array_push($array,$output);
        }
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $array,
            $data_header->total(),
            $data_header->perPage(),
            $data_header->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $data_header->currentPage()
                ]
            ]
        );
    
       return response()->json($itemsTransformedAndPaginated);
    }
}
