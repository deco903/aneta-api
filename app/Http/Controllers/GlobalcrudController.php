<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Storage;
use App\Models\TempTable;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

class GlobalcrudController extends Controller
{
    public function index(Request $request)
    {
        // $data = implode(",",$request->table_column);
        // dd($data);
        // dd($request->table_column);

           if($request->table_column == []){
            $data = DB::table($request->table_name)->get();
           } else {
            $data = DB::table($request->table_name)
            ->select($request->table_column)
            ->get();
           }


        return response()->json([
            'message' => 'Success Found',
            'data' => $data
        ], 200);
    }


    public function insert(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {
            DB::beginTransaction();

            DB::table($replace_tablename)->insert([
                $request->tbl_coloumn
            ]);
            $id = DB::getPdo()->lastInsertId();
            DB::commit();
            return response()->json([
                'status'    => 'success',
                'message'   => 'success insert data',
                'id'        => $id
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


    public function delete(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        DB::beginTransaction();
        try {
         
            $cek_data = DB::table($replace_tablename)
                            ->where('id', $request->id)
                            ->first();
            if($cek_data)
            {
                DB::table($replace_tablename)
                ->where('id',$request->id)
                ->delete();
                DB::commit();

                return response()->json([
                    'status'    => 'success',
                    'message'   => 'success delete data',
                ]);
            }else{
                return response()->json([
                    'status'    => 'failed',
                    'message'   => 'data not found',
                ],500);
            }


        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500);
        }
    }


    public function get_byid(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {
            $cek_data = DB::table($replace_tablename)
                            ->where('id', $request->id)
                            ->first();
            if($cek_data)
            {
                return response()->json([
                    'status'    => 'success',
                    'message'   => 'succes get detail data',
                    'data'      => $cek_data
                ]);

            }else{
                return response()->json([
                    'status'    => 'failed',
                    'message'   => 'data not found',
                ]);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500);
        }
    }


    public function update(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {
            $cek_data = DB::table($replace_tablename)
                            ->where('id', $request->id)
                            ->first();
            if($cek_data)
            {
                $data = DB::table($replace_tablename)
                    ->where('id',$request->id)
                    ->update($request->tbl_coloumn);
                return response()->json([
                    'status'    => 'success',
                    'message'   => 'succes update data',
                    // 'data'      => $cek_data
                ],200);

            }else{
                return response()->json([
                    'status'    => 'failed',
                    'message'   => 'data not found',
                ],500);
            }

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ], 500);
        }
    }


    public function get_data(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {
            if($request->pagination)
            {
                if($request->tbl_coloumn != [])
                {
                    $data = DB::table($replace_tablename)
                               ->orderBy($request->order_coloumn,$request->order_by)
                               ->paginate($request->total_result);
                }else{
                    $data = DB::table($replace_tablename)
                            ->select($request->tbl_coloumn)
                            ->orderBy($request->order_coloumn,$request->order_by)
                            ->paginate($request->total_result);
                }
            }else{
                if($request->tbl_coloumn != [])
                {
                    $data = DB::table($replace_tablename)
                               ->orderBy($request->order_coloumn,$request->order_by)
                               ->get();
                }else{
                    $data = DB::table($replace_tablename)
                            ->select($request->tbl_coloumn)
                            ->orderBy($request->order_coloumn,$request->order_by)
                            ->get();
                }
            }
        
            return response()->json([
                'status'    => 'success',
                'message'   => 'succes get data '.$request->tbl_name,
                'data'      => $data
            ],200);
        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500);
        }
       


    }


    public function show_data(Request $request)
    {
        $datas = DB::table($request->table_name)->where('id',$request->id)->first();

            try {
                if($datas){
                    $data = DB::table($request->table_name)
                        ->where('id',$request->id)
                        ->get();
                    } else {
                        return response()->json([
                            'message' => 'Data Not Found',
                        ], 404);
                    }
                } catch (\Exception $e) {
                    return response()->json(['status' => 'error','message' => $e], 500);
                }

        return response()->json([
            'message' => 'Success Found',
            'data' => $data
        ], 200);

        // dd($data);
    }


    public function update_data(Request $request)
    {

        $data = DB::table($request->table_name)
        ->where('id',$request->id)
        ->update($request->table_column);

        return response()->json([
            'message' => 'Data berhasil update',
            'data' => $data
        ], 200);

    }


    public function all(Request $request)
    {
        $tables = DB::select($request->table_column);

        foreach($tables as $table)
        {
            echo $table->Table_column;
        }

        return response()->json([
            'message' => 'Success Found',
            'data' => $table
        ], 200);
    }


    public function count_data(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {

            $table = DB::table($replace_tablename);
            $kondisi_tertentu = $request->kondisi;
        
            if($kondisi_tertentu != null){
                foreach($kondisi_tertentu as $kondisi){
                    if($kondisi['keterangan'] == 'where'){
                    
                        $table->where($kondisi['kolom'],$kondisi['value']);
                    }
                }
              
            }

            return response()->json([
                'status'    => 'success',
                'message'   => 'succes count data '.$request->tbl_name,
                'data'      => $table->count()
            ],200);

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }
    }


    public function get_data_where(Request $request)
    {
      
        try {

            $replace_tablename = str_replace("Model","",$request->tbl_name);
            $table = DB::table($replace_tablename)->select($request->tbl_coloumn);
            foreach ($request->data as $values)
                if($values['operator'] == "like")
                {
                    $table->orwhere($values['tbl_coloumn'],$values['operator'],"%".$values['tbl_value']."%");
                }
                else{
                    $table->where($values['tbl_coloumn'],$values['operator'],$values['tbl_value']);
                }
    

            if($request->pagination == true){
                $data = $table->orderBy($request->order_coloumn,$request->order_by)->paginate($request->total_result);
                if($data->total() == 0){
                    $data = ['status' => false];
                }
            }else{
                $data = $table->orderBy($request->order_coloumn,$request->order_by)->get();
                if(count($data) == 0){
                    $data = ['status' => false];
                }
            }

         


    
            return response()->json(
                $data,200);

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ], 500);

        }
    }


    public function get_data_where_first(Request $request)
    {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        $table = DB::table($replace_tablename)->select($request->tbl_coloumn);
        // TempTable::insert([
        //     'temp_data' => json_encode($request->all()),
        //     'remark_0' => json_encode($request->data),
        // ]);
        $data = $table->where(function ($query) use ($request)
        {
            foreach ($request->data as $values)
            $kondisi = $values['kondisi'];
            if($values['operator'] == "like")
            {
                $query->$kondisi($values['tbl_coloumn'],$values['operator'],"%".$values['tbl_value']."%");
            }
            else{
                $query->$kondisi($values['tbl_coloumn'],$values['operator'],$values['tbl_value']);
            }

        })->first();

        if($data){
            $data = [
                        'code' => 200,
                        'data' => $data
                    ];
            $data;
        }else{
            $data = [
                'code' => 404,
                'data' => null
            ];
        }

        try {

            return response()->json(
                $data
                
            ,200);

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ], 500);
        }
    }


    public function destroy(Request $request)
    {
        $datas = DB::table($request->table_name)->where('id',$request->id)->delete();

        try {
            if($datas){
                $data = DB::table($request->table_name)
                ->where('id',$request->id)
                ->delete();
            }else{
                return response()->json([
                    'message' => 'Data Not Found',
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error','message' => $e], 500);
        }

        return response()->json([
            'message' => 'Data berhasil dihapus',
            'data' => $data
        ], 200);
    }


    public function upload_photo(Request $request){
        $date = date('YMDHis');
        $uuid = $request->user()->uuid;
        // $file = base64_decode($request['base64_image']);
        // $success = storage_path('app/test');
        // $success = Storage::disk('local')->put('imgage.png', $file);
        // $extension = $request->file('image')->extension();
        try {
            $upload = $request->file('image')->storeAs(
                $request->table_name,'{'.$request->ori_file_name.'}'.'{'.$uuid.'}'.'{'.$date.'}'.'.'.$request->file_type
            );
    
            $data = DB::table($request->table_name)
            ->where('id',$request->id)
            ->update([
                $request->column_name => $upload
            ]);
    
            return response()->json([
                                      'status' => true,
                                      'message'  => 'Succes upload',
                                      'data' => url('storage/'.$upload)
                                    ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error','message' => $e], 500);
        }   
    }


    public function upload_base64(Request $request)
    {
        $file = base64_decode($request->image);
        $safeName = Str::random(20).'.'.$request->image_type;
        Storage::disk('local')->put($request->nama_folder.'/'.$safeName,$file);

        return response()->json([
                                  'status' => true,
                                  'message'  => 'Succes upload',
                                  'data' => $request->nama_folder.'/'.$safeName
                                ]);       
    }
    function global_join(Request $request){
        
       // $jumlahjoin = count($request->tbl_join);
       try {
            $users = DB::table($request->tbl_induk);

            foreach($request->join as $join_table)
            {
                $users->join($join_table['tbl_join'], $request->tbl_induk.'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.'.$join_table['refkey']);
                
            }
            return response()->json([
                        'message' => 'Success Found',
                        'data' => $users->orderBy($request->order_coloumn,$request->order_by)->paginate($request->pagination)
                    ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }
     
                    // ->join('contacts', 'users.id', '=', 'contacts.user_id')
                    // ->join('orders', 'users.id', '=', 'orders.user_id')
                    // ->select('users.*', 'contacts.phone', 'orders.price')
                    // ->get();

    }
    function global_join_first(Request $request){
        
        // $jumlahjoin = count($request->tbl_join);
        $users = DB::table($request->tbl_induk);
 
        foreach($request->join as $join_table)
        {
            $users->join($join_table['tbl_join'], $request->tbl_induk.'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.id');
            
        }
        return response()->json([
                    'message' => 'Success Found',
                    'data' => $users->where($request->tbl_induk.'.id',$request->id)->first(),
                ], 200);
        try {
       
 
         } catch (\Exception $e) {
                 return response()->json([
                 'status'    => 'error',
                 'message'   => $e,
             ],500
             );
 
         }
      
                     // ->join('contacts', 'users.id', '=', 'contacts.user_id')
                     // ->join('orders', 'users.id', '=', 'orders.user_id')
                     // ->select('users.*', 'contacts.phone', 'orders.price')
                     // ->get();
 
     }
     function global_join_where(Request $request)
     {

        try {
            $users = DB::table($request->tbl_induk);
            if($request->select != null){
                $select = $request->select;
                $users->select($select);
            
            }

            foreach($request->join as $join_table)
            {
                $users->join($join_table['tbl_join'], $request->tbl_induk.'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.'.$join_table['refkey']);
                
            }
            $kondisi_tertentu = $request->kondisi;
            if($kondisi_tertentu != null){
                if($kondisi_tertentu['keterangan'] == 'where'){
                    
                    $users->where($kondisi_tertentu['kolom'],$kondisi_tertentu['value']);
                }
            }
            $users->where(function($users) use ($request){
                foreach($request->where as $kondisi){
                    if($kondisi['operator'] == "ILIKE")
                    {
                        $users->orwhere($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],'%'.$kondisi['tbl_value'].'%');
                    }else{
                        
                        $users->where($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],$kondisi['tbl_value']);
                    }
                }    
            });
            
           
            return response()->json([   
                        'message' => 'Success Found',
                        'data' => $users->orderBy($request->order_coloumn,$request->order_by)->paginate($request->paginate)
                    ], 200);
       

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }            
     }

     public function filter_global(Request $request)
     {
        try {
            $users = DB::table($request->tbl_induk);

            foreach($request->join as $join_table)
            {
                $users->join($join_table['tbl_join'], $request->tbl_induk.'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.'.$join_table['refkey']);
                
            }

            // foreach($request->filter as $filter){
            //     $user->when($role, function ($query, $role) {
            //         $query->where('role_id', $role);
            //     })
            // }
            
            return response()->json([   
                        'message' => 'Success Found',
                        'data' => $users->orderBy($request->order_coloumn,$request->order_by)->paginate($request->paginate)
                    ], 200);
       

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }        
     }
     
     public function validation_global(Request $request){
        $data = $request->data;
        $request->validate($data);
        return response()->json([
            'code'    => '200',
        ],200
        );
     }
     
     public function global_join_sub(Request $request)
     {
      
        try {
            $users = DB::table($request->tbl_induk);
            if($request->select != null){
                $select = $request->select;
                $users->select($select);
            
            }

            foreach($request->join as $join_table)
            {
                $users->join($join_table['tbl_join'], $join_table['tbl_join2'].'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.'.$join_table['refkey']);
                
            }
            $kondisi_tertentu = $request->kondisi;
        
            if($kondisi_tertentu != null){
                foreach($kondisi_tertentu as $kondisi){
                    if($kondisi['keterangan'] == 'where'){
                    
                        $users->where($kondisi['kolom'],$kondisi['value']);
                    }elseif($kondisi['keterangan'] == "deleted_at"){
                        $users->whereNull($kondisi['kolom']);
                    }
                }
              
            }

            $users->where(function($users) use ($request){
                foreach($request->where as $kondisi){
                    if(isset($kondisi['kondisi'])){
                        $function_kondisi = $kondisi['kondisi'];
                        if($kondisi['operator'] == "ILIKE")
                        {
                            $users->$function_kondisi($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],'%'.$kondisi['tbl_value'].'%');
                        }else{
                            $users->$function_kondisi($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],$kondisi['tbl_value']);
                        }
    
                    }else{
                        if($kondisi['operator'] == "ILIKE")
                    {
                        $users->orwhere($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],'%'.$kondisi['tbl_value'].'%');
                    }else
                    {
                        $users->where($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],$kondisi['tbl_value']);
                    }
                    }
                    
                }
            });
            
          
            return response()->json([   
                        'message' => 'Success Found',
                        'data' => $users->orderBy($request->order_coloumn,$request->order_by)->paginate($request->paginate)
                    ], 200);
       

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }          
     }
     public function global_join_sub_first(Request $request)
     {
  
        try {
            $users = DB::table($request->tbl_induk);
            if($request->select != null){
                $select = $request->select;
                $users->select($select);
            
            }

            foreach($request->join as $join_table)
            {
                $users->join($join_table['tbl_join'], $join_table['tbl_join2'].'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.'.$join_table['refkey']);
                
            }
            $kondisi_tertentu = $request->kondisi;
        
            if($kondisi_tertentu != null){
                foreach($kondisi_tertentu as $kondisi){
                    if($kondisi['keterangan'] == 'where'){
                    
                        $users->where($kondisi['kolom'],$kondisi['value']);
                    }
                }
              
            }

            $users->where(function($users) use ($request){
                foreach($request->where as $kondisi){
                    if(isset($kondisi['kondisi'])){
                        $function_kondisi = $kondisi['kondisi'];
                        if($kondisi['operator'] == "ILIKE")
                        {
                            $users->$function_kondisi($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],'%'.$kondisi['tbl_value'].'%');
                        }else{
                            $users->$function_kondisi($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],$kondisi['tbl_value']);
                        }
    
                    }else{
                        if($kondisi['operator'] == "ILIKE")
                    {
                        $users->orwhere($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],'%'.$kondisi['tbl_value'].'%');
                    }else
                    {
                        $users->where($kondisi['tbl_coloumn'].'.'.$kondisi['tbl_field'],$kondisi['operator'],$kondisi['tbl_value']);
                    }
                    }
                    
                }
            });
            return response()->json([   
                        'message' => 'Success Found',
                        'data' => $users->first()
                    ], 200);
       

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500
            );

        }          
     }

     public function groupBy(Request $request)
     {
        $replace_tablename = str_replace("Model","",$request->tbl_name);
        try {
            $table = DB::table($replace_tablename)
                    ->select($request->select);
            

            if($request->join){
                    foreach($request->join as $join_table)
                    {
                        $table->join($join_table['tbl_join'], $join_table['tbl_join2'].'.'.$join_table['foregenkey'], '=', $join_table['tbl_join'].'.'.$join_table['refkey']);
                        
                    }
            }

            if($request->where){
                foreach($request->where as $kondisi){
                    if($kondisi['keterangan'] == 'where')
                    {
                        $table->where($kondisi['kolom'],$kondisi['operator'],$kondisi['value']);
                    }
                }
            }
        if($request->order_by)
        {
            $get = $table->orderBy($request->order_coloumn,$request->order_by);        
        }

        if($request->paginate){
            $get = $table->groupBy($request->groupby)->paginate($request->result);
            
        }else {
             $get = $table->groupBy($request->groupby)->get();
        }
        
        if(count($get) > 0){
            return response()->json(['status' => true,
                                     'data' => $get            
                                    ]);
        }else{
            return response()->json([
                'status' => false
            ]);
        }         

        } catch (\Exception $e) {
            return response()->json([
                'status'    => 'error',
                'message'   => $e,
            ],500);
        }
       
     }

     
}
