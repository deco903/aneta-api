<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class X_assessment_actual extends Model
{
    use HasFactory;
    protected $table = 'x_assessment_actual';
    protected $guarded = 'id';

    public function assessment_planing()
    {
            return $this->belongsTo(X_assessment_planing::class);  
    }

}
