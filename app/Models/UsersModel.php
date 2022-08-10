<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class UsersModel extends Authenticatable implements MustVerifyEmail
{
    use HasFactory,Notifiable,HasApiTokens;
    protected $table = 'users';
    // protected $guarded = 'id';
    public $timestamps = true;
    public $fillable = [ 
        "name",
        "email",
        "email_verified_at",
        "remember_token",
        "created_at",
        "updated_at",
        "user_role_id",
        "user_status_id",
        "deleted_at",
        "last_login_at",
        "reset_password_token",
        "verify_code",
        "expired_password_at",
        "uuid",
        "institute_id",
        "social_id",
        "social_type",
        "password"
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function AauthAcessToken(){
        return $this->hasMany('\App\OauthAccessToken');
    }

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    public function getfieldtype()
    {
        $builder = $this->getConnection()->getSchemaBuilder();
        $columns = $builder->getColumnListing($this->getTable());
        $array_colomtype = [];
        foreach($columns as $column)
        {
            $key = $builder->getColumnType($this->getTable(),$column);
            array_push($array_colomtype , $key);
        }

        return $array_colomtype;   
    }
    public function user_role()
    {
        return $this->belongsTo(R_user_roleModel::class);
    }
    public function institute()
    {
        return $this->belongsTo(M_institutesModel::class);
    }
}
