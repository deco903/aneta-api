<?php

namespace App\Http\Controllers;

use App\Models\X_academic_yearModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicYearController extends Controller
{
    public function update_academic_year(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {
            DB::beginTransaction();

            X_academic_yearModel::where('institute_id',$request->institute_id)
            ->update([
               'is_active' => 'F'
            ]);

            X_academic_yearModel::where('id',$request->academic_id)
                                 ->update([
                                    'is_active' => 'T'
                                 ]);
            DB::commit();
            return response()->json([
                'status'    => 'success',
                'message'   => 'Update'
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
}
