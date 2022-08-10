<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableinfoRequest;
use App\Models\CompaniesModel;
use App\Models\Failed_jobsModel;
use App\Models\L_logsModel;
use App\Models\M_dapodik_kecamatan;
use App\Models\M_dapodik_kota;
use App\Models\M_dapodik_provinsi;
use App\Models\M_dapodik_sekolah;
use App\Models\M_institute_picModel;
use App\Models\M_institutesModel;
use App\Models\M_user_parentsModel;
use App\Models\M_user_profileModel;
use App\Models\MigrationsModel;
use App\Models\Password_resetsModel;
use App\Models\Personal_access_tokensModel;
use App\Models\R_cityModel;
use App\Models\R_competence_aspectModel;
use App\Models\R_competence_typeModel;
use App\Models\R_districtModel;
use App\Models\R_evaluation_typeModel;
use App\Models\R_expertise_areaModel;
use App\Models\R_expertise_programModel;
use App\Models\R_religionModel;
use App\Models\R_residence_typeModel;
use App\Models\R_skill_compentenceModel;
use App\Models\R_stateModel;
use App\Models\R_sub_districtModel;
use App\Models\R_transportation_typeModel;
use App\Models\R_user_roleModel;
use App\Models\R_user_statusModel;
use App\Models\UsersModel;
use App\Models\X_academic_classModel;
use App\Models\X_academic_studentsModel;
use App\Models\X_academic_subjectsModel;
use App\Models\X_academic_teachersModel;
use App\Models\X_academic_yearModel;
use App\Models\X_competenceModel;
use App\Models\X_evaluationModel;
use App\Models\X_online_classModel;
use Illuminate\Http\Request;

class ShowalltableController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {

        $table_CompaniesModel = new CompaniesModel;
        $table_Failed_jobsModel = new Failed_jobsModel();
        $table_M_institute_picModel = new M_institute_picModel();
        $table_M_institutesModel = new M_institutesModel();
        $table_M_user_parentsModel = new M_user_parentsModel();
        $table_M_user_profileModel = new M_user_profileModel();
        $table_MigrationsModel = new MigrationsModel();
        $table_Password_resetsModel = new Password_resetsModel();
        $table_Personal_access_tokensModel = new Personal_access_tokensModel();
        $table_R_cityModel = new R_cityModel();
        $table_R_competence_aspectModel = new R_competence_aspectModel();
        $table_R_competence_typeModel = new R_competence_typeModel();
        $table_R_districtModel = new R_districtModel();
        $table_R_evaluation_typeModel = new R_evaluation_typeModel();
        $table_R_expertise_areaModel = new R_expertise_areaModel();
        $table_R_expertise_programModel = new R_expertise_programModel();
        $table_R_religionModel = new R_religionModel();
        $table_R_residence_typeModel = new R_residence_typeModel();
        $table_R_skill_compentenceModel = new R_skill_compentenceModel();
        $table_R_stateModel = new R_stateModel();
        $table_R_sub_districtModel = new R_sub_districtModel();
        $table_R_transportation_typeModel = new R_transportation_typeModel();
        $table_R_user_roleModel = new R_user_roleModel();
        $table_R_user_statusModel = new R_user_statusModel();
        $table_UsersModel = new UsersModel();
        $table_X_academic_classModel = new X_academic_classModel();
        $table_X_academic_studentsModel = new X_academic_studentsModel();
        $table_X_academic_subjectsModel = new X_academic_subjectsModel();
        $table_X_academic_teachersModel = new X_academic_teachersModel();
        $table_X_academic_yearModel = new X_academic_yearModel();
        $table_X_competenceModel = new X_competenceModel();
        $table_X_evaluationModel = new X_evaluationModel();
        $table_X_online_classModel = new X_online_classModel();
        $table_l_logsModel =  new L_logsModel();
        $table_M_dapodik_kota = new M_dapodik_kota();
        $table_M_dapodik_kecamatan = new M_dapodik_kecamatan();
        $table_M_dapodik_provinsi = new M_dapodik_provinsi();
        $table_M_dapodik_sekolah = new M_dapodik_sekolah();

        $array_show_table = [
            $table_CompaniesModel->getTable().'Model',
            $table_Failed_jobsModel->getTable().'Model',
            $table_M_institute_picModel->getTable().'Model',
            $table_M_institutesModel->getTable().'Model',
            $table_M_user_parentsModel->getTable().'Model',
            $table_M_user_profileModel->getTable().'Model',
            $table_MigrationsModel->getTable().'Model',
            $table_Password_resetsModel->getTable().'Model',
            $table_Personal_access_tokensModel->getTable().'Model',
            $table_R_cityModel->getTable().'Model',
            $table_R_competence_aspectModel->getTable().'Model',
            $table_R_competence_typeModel->getTable().'Model',
            $table_R_districtModel->getTable().'Model',
            $table_R_evaluation_typeModel->getTable().'Model',
            $table_R_expertise_areaModel->getTable().'Model',
            $table_R_expertise_programModel->getTable().'Model',
            $table_R_religionModel->getTable().'Model',
            $table_R_residence_typeModel->getTable().'Model',
            $table_R_skill_compentenceModel->getTable().'Model',
            $table_R_stateModel->getTable().'Model',
            $table_R_sub_districtModel->getTable().'Model',
            $table_R_transportation_typeModel->getTable().'Model',
            $table_R_user_roleModel->getTable().'Model',
            $table_R_user_statusModel->getTable().'Model',
            $table_UsersModel->getTable().'Model',
            $table_X_academic_classModel->getTable().'Model',
            $table_X_academic_studentsModel->getTable().'Model',
            $table_X_academic_subjectsModel->getTable().'Model',
            $table_X_academic_teachersModel->getTable().'Model',
            $table_X_academic_yearModel->getTable().'Model',
            $table_X_competenceModel->getTable().'Model',
            $table_X_evaluationModel->getTable().'Model',
            $table_X_online_classModel->getTable().'Model',
            $table_l_logsModel->getTable().'Model',
            $table_M_dapodik_kecamatan->getTable().'Model',
            $table_M_dapodik_provinsi->getTable().'Model',
            $table_M_dapodik_kota->getTable().'Model',
            $table_M_dapodik_sekolah->getTable().'Model',
        ];

        return response()->json($array_show_table);
    }

    public function table_info(TableinfoRequest $request)
    {

        $table_CompaniesModel = new CompaniesModel;
        $table_Failed_jobsModel = new Failed_jobsModel();
        $table_M_institute_picModel = new M_institute_picModel();
        $table_M_institutesModel = new M_institutesModel();
        $table_M_user_parentsModel = new M_user_parentsModel();
        $table_M_user_profileModel = new M_user_profileModel();
        $table_MigrationsModel = new MigrationsModel();
        $table_Password_resetsModel = new Password_resetsModel();
        $table_Personal_access_tokensModel = new Personal_access_tokensModel();
        $table_R_cityModel = new R_cityModel();
        $table_R_competence_aspectModel = new R_competence_aspectModel();
        $table_R_competence_typeModel = new R_competence_typeModel();
        $table_R_districtModel = new R_districtModel();
        $table_R_evaluation_typeModel = new R_evaluation_typeModel();
        $table_R_expertise_areaModel = new R_expertise_areaModel();
        $table_R_expertise_programModel = new R_expertise_programModel();
        $table_R_religionModel = new R_religionModel();
        $table_R_residence_typeModel = new R_residence_typeModel();
        $table_R_skill_compentenceModel = new R_skill_compentenceModel();
        $table_R_stateModel = new R_stateModel();
        $table_R_sub_districtModel = new R_sub_districtModel();
        $table_R_transportation_typeModel = new R_transportation_typeModel();
        $table_R_user_roleModel = new R_user_roleModel();
        $table_R_user_statusModel = new R_user_statusModel();
        $table_UsersModel = new UsersModel();
        $table_X_academic_classModel = new X_academic_classModel();
        $table_X_academic_studentsModel = new X_academic_studentsModel();
        $table_X_academic_subjectsModel = new X_academic_subjectsModel();
        $table_X_academic_teachersModel = new X_academic_teachersModel();
        $table_X_academic_yearModel = new X_academic_yearModel();
        $table_X_competenceModel = new X_competenceModel();
        $table_X_evaluationModel = new X_evaluationModel();
        $table_X_online_classModel = new X_online_classModel();
        $table_l_logsModel =  new L_logsModel();
        $table_M_dapodik_kota = new M_dapodik_kota();
        $table_M_dapodik_kecamatan = new M_dapodik_kecamatan();
        $table_M_dapodik_provinsi = new M_dapodik_provinsi();
        $table_M_dapodik_sekolah = new M_dapodik_sekolah();

        if($request->table == 'companiesModel')
        {
            $table = $table_CompaniesModel;
        }elseif($request->table == 'failed_jobsModel')
        {
            $table = $table_Failed_jobsModel;
        }elseif($request->table == 'm_institute_picModel')
        {
            $table = $table_M_institute_picModel;
        }elseif($request->table == 'm_institutesModel')
        {
            $table = $table_M_institutesModel;
        }elseif($request->table == 'm_user_parentsModel')
        {
            $table = $table_M_user_parentsModel;
        }elseif($request->table == 'm_user_profileModel')
        {
            $table = $table_M_user_profileModel;
        }elseif($request->table == 'migrationsModel')
        {
            $table = $table_MigrationsModel;
        }elseif($request->table == 'password_resetsModel')
        {
            $table = $table_Password_resetsModel;
        }elseif($request->table == 'personal_access_tokensModel')
        {
            $table = $table_Personal_access_tokensModel;
        }elseif($request->table == 'r_cityModel')
        {
            $table = $table_R_cityModel;
        }elseif($request->table == 'r_competence_aspectModel')
        {
            $table = $table_R_competence_aspectModel;
        }elseif($request->table == 'r_competence_typeModel')
        {
            $table = $table_R_competence_typeModel;
        }elseif($request->table == 'r_districtModel')
        {
            $table = $table_R_districtModel;
        }elseif($request->table == 'r_evaluation_typeModel')
        {
            $table = $table_R_evaluation_typeModel;
        }elseif($request->table == 'r_expertise_areaModel')
        {
            $table = $table_R_expertise_areaModel;
        }elseif($request->table == 'r_expertise_programModel')
        {
            $table = $table_R_expertise_programModel;
        }elseif($request->table == 'r_religionModel')
        {
            $table = $table_R_religionModel;
        }elseif($request->table == 'r_residence_typeModel')
        {
            $table = $table_R_residence_typeModel;
        }elseif($request->table == 'r_skill_compentenceModel')
        {
            $table = $table_R_skill_compentenceModel;
        }elseif($request->table == 'r_stateModel')
        {
            $table = $table_R_stateModel;
        }elseif($request->table == 'r_sub_districtModel')
        {
            $table = $table_R_sub_districtModel;
        }elseif($request->table == 'r_transportation_typeModel')
        {
            $table = $table_R_transportation_typeModel;
        }elseif($request->table == 'r_user_roleModel')
        {
            $table = $table_R_user_roleModel;
        }elseif($request->table == 'r_user_statusModel')
        {
            $table = $table_R_user_statusModel;
        }elseif($request->table == 'usersModel')
        {
            $table = $table_UsersModel;
        }elseif($request->table == 'x_academic_classModel')
        {
            $table = $table_X_academic_classModel;
        }elseif($request->table == 'x_academic_studentsModel')
        {
            $table = $table_X_academic_studentsModel;
        }elseif($request->table == 'x_academic_subjectsModel')
        {
            $table = $table_X_academic_subjectsModel;
        }elseif($request->table == 'x_academic_teachersModel')
        {
            $table = $table_X_academic_teachersModel;
        }elseif($request->table == 'x_academic_yearModel')
        {
            $table = $table_X_academic_yearModel;
        }elseif($request->table == 'x_competenceModel')
        {
            $table = $table_X_competenceModel;
        }elseif($request->table == 'x_evaluationModel')
        {
            $table = $table_X_evaluationModel;
        }elseif($request->table == 'x_online_classModel')
        {
            $table = $table_X_online_classModel;
        }elseif($request->table == 'l_logsModel')
        {
            $table = $table_l_logsModel;
        }elseif($request->table == 'dapodik_sekolahModel')
        {
            $table = $table_M_dapodik_sekolah;
        }elseif($request->table == 'dapodik_kotaModel')
        {
            $table = $table_M_dapodik_kota;
        }
        elseif($request->table == 'dapodik_kecamatanModel')
        {
            $table = $table_M_dapodik_kecamatan;
        }elseif($request->table == 'dapodik_provinsiModel')
        {
            $table = $table_M_dapodik_provinsi;
        }
        else{
            return response()->json(['status' => false,
                                    'message'=>'table not found']);
        }


        $table_info = [
                        'table_name'  => $table->getTable().'Model',
                        'column_name' => $table->getTableColumns(),
                        'data_type'   => $table->getfieldtype(),
                        'primary_key' => [
                                            $table->getKeyName()
                                        ]
                    ];
        return response()->json($table_info);


    }
}
