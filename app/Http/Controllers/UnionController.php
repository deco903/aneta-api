<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\R_CityModel;

class UnionController extends Controller
{
    public function AllUnion()
    {
        $city = DB::table("r_city")
                ->select("r_city.id",
                  "r_city.city as deskripsi")
                ->get();


        $array_city = [];
                foreach($city as $citys){
                    $data = [
                        'id' => $citys->id,
                        'deskripsi' => $citys->deskripsi
                    ];
                    array_push($array_city,$data);
                }

        $competence_aspect = DB::table("r_competence_aspect")
                             ->select("r_competence_aspect.id",
                                      "r_competence_aspect.competence_aspect as deskripsi")
                             ->get();

        $array_competence_aspect = [];
                foreach($competence_aspect as $aspect){
                    $data = [
                        'id' => $aspect->id,
                        'deskripsi' => $aspect->deskripsi
                    ];
                    array_push($array_competence_aspect,$data);
                }                     

        $competence_type = DB::table("r_competence_type")
                            ->select("r_competence_type.id",
                                        "r_competence_type.competence_type as deskripsi")
                            ->get();

        $array_competence_type = [];
                foreach($competence_type as $type){
                    $data = [
                        'id' => $type->id,
                        'deskripsi' => $type->deskripsi
                    ];
                    array_push($array_competence_type,$data);
                }                     

        
        $district = DB::table("r_district")
                        ->select("r_district.id",
                                "r_district.district as deskripsi")
                        ->get();

        $array_district = [];
                foreach($district as $type){
                    $data = [
                        'id' => $type->id,
                        'deskripsi' => $type->deskripsi
                    ];
                    array_push($array_district,$data);
                }                             

        $evaluation_type = DB::table("r_evaluation_type")
                               ->select("evaluation_type as deskripsi")
                               ->get();
                               
                           
        $array_evaluation_type = [];
                foreach($evaluation_type as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_evaluation_type,$data);
                    }        
                    
                    
        $expertise_area = DB::table("r_expertise_area")
                              ->select("expertise_area as deskripsi")
                              ->get();
                              
        $array_expertise_area = [];
                foreach($expertise_area as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_expertise_area, $data);    
                }

        $expertise_program = DB::table("r_expertise_program")
                                 ->select("expertise_program as deskripsi")
                                 ->get();

        $array_expertise_program = [];
                foreach($expertise_program as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_expertise_program, $data);    
                }

        $religion = DB::table("r_religion")
                        ->select("religion as deskripsi")
                        ->get();

        $array_religion = [];
                foreach($religion as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_religion, $data);    
                }           

        $residence_type = DB::table("r_residence_type")
                             ->select("residence_type as deskripsi")
                             ->get();


        $array_residence_type = [];
                foreach($residence_type as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_residence_type,$data);    
                }                          

        $skill_compentence = DB::table("r_skill_compentence")
                             ->select("skill_compentence as deskripsi")
                             ->get();


        $array_skill_compentence = [];
                foreach($skill_compentence as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_skill_compentence,$data);    
                }           


        $state = DB::table("r_state")
                     ->select("state as deskripsi","id")
                     ->get();
                
        $array_state = [];
               foreach($state as $type){
                     $data = [
                        'id' => $type->id,
                        'deskripsi' => $type->deskripsi
                     ];
                     array_push($array_state,$data);
               }
                   
        
        $sub_district = DB::table("r_sub_district")
                                ->select("sub_district as deskripsi")
                                ->get();


        $array_sub_district = [];
                foreach($sub_district as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_sub_district,$data);    
                }           

        $transportation_type = DB::table("r_transportation_type")
                            ->select("transportation_type as deskripsi")
                            ->get();                

        $array_transportation_type = [];
                foreach($transportation_type as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi    
                        ];
                        array_push($array_transportation_type,$data);
                }


        $user_role = DB::table("r_user_role")
                        ->select("user_role as deskripsi")
                        ->get();
                        
        $array_user_role = [];
                foreach($user_role as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_user_role,$data);
                }


        
        $user_status = DB::table("r_user_status")
                           ->select("user_status as deskripsi")
                           ->get();    

            
        $array_user_status = [];
                foreach($user_status as $type){
                        $data = [
                            'id' => $type->id,
                            'deskripsi' => $type->deskripsi
                        ];
                        array_push($array_user_status,$data);
                }

                                      

         return response()->json([
             'city' => $array_city,
             'competence_aspect' => $array_competence_aspect,
             'competence_type' => $array_competence_type,
             'district' => $array_district,
             'evaluation_type' => $array_evaluation_type,
             'expertise_area' => $array_expertise_area,
             'expertise_program' => $array_expertise_program,
             'religion' => $array_religion,
             'residence_type' => $array_residence_type,
             'skill_compentence' => $array_skill_compentence,
             'state' => $array_state,
             'sub_district' => $array_sub_district,
             'transportation_type' => $array_transportation_type,
             'user_role' => $array_user_role,
             'user_status' => $array_user_status,
        ]);
    }
}
