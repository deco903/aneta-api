<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class X_assessment_header extends Model
{
    use HasFactory;
    protected $table = 'x_assessment_header';
    protected $guarded = 'id';

    public function academic_year()
    {
            return $this->belongsTo(X_academic_yearModel::class);  
    }
    public function class()
    {
            return $this->belongsTo(X_academic_classModel::class);  
    }
    public function subjects()
    {
            return $this->belongsTo(X_academic_subjectsModel::class);  
    }

    public function assessment_actual_desc()
    {
            return $this->belongsTo(X_assessment_actual_descModel::class);  
    }

    

}
