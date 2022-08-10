<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\i_logModel;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function AddLog(Request $request)
    {
        // dd(date('Ymd'));
        $this->validate($request, [
            'user_id' => 'required',
            'user_name' => 'required',
            'company_name' => 'required',
            'session_id' => 'required',
            'request_method' => 'required',
            'log_url' => 'required',
            'request_payload' => 'required',
            'log_task' => 'required',
            'client_ip_address' => 'required',
            'client_http_agent' => 'required',
        ]);


        $log = i_logModel::insert([
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            'company_name' => $request->company_name,
            'session_id' => $request->session_id,
            'request_method' => $request->request_method,
            'log_url' => $request->log_url,
            'request_payload' => $request->request_payload,
            'log_task' => $request->log_task,
            'client_ip_address' => $request->client_ip_address,
			'client_http_agent' => $request->client_http_agent,
			'log_start' => date('Ymd'),
            'log_end' => date('Ymd'),
         ]);
       
         if($log){
            return response()->json(['message' => 'Insert Success'], 200);
         }else{
            return response()->json(['message' => 'Insert Failed']);
         }
        
    }

    public function logActivity()
    {
        $log_activity = i_logModel::all();

        return response()->json([
            'message' => 'Success Found',
            'data' =>  $log_activity
        ], 200);
    }
}
