<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlowableController extends Controller
{
    public function index(Request $request){
        $key = $request->key;
        $proses_def_id = DB::table('referensi_flowable')
                        ->where('status',1)
                        ->whereIn('key', $key)
                        ->get();
        return response(['status' => 200,
                         'data' => $proses_def_id
                        ]);
    }
}
