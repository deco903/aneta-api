<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class X_assessment_actual_desc extends Model
{
    use HasFactory;

    protected $table = 'x_assessment_actual_desc';
    protected $guarded = 'id';

    public function users()
    {
            return $this->belongsToMany(users::class);  
    }

    public function competence_aspect()
    {
            return $this->belongsToMany(r_competence_aspect::class);  
    }
    
    public function academic_students()
    {
            return $this->belongsToMany(x_academic_students::class);  
    }

    public function assessment_header()
    {
            return $this->belongsToMany(x_assessment_header::class);  
    }

}
