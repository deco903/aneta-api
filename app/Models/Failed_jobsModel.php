<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failed_jobsModel extends Model
{
    use HasFactory;
    protected $table = 'failed_jobs';
    protected $guarded = [];
    
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    // public function getfieldtype()
    // {
    //     $builder = $this->getConnection()->getSchemaBuilder();
    //     $columns = $builder->getColumnListing($this->getTable());
    //     $array_colomtype = [];
    //     foreach($columns as $column)
    //     {
    //         $key = $builder->getColumnType($this->getTable(),$column);
    //         array_push($array_colomtype , $key);
    //     }

    //     return $array_colomtype;
        
    // }
}
