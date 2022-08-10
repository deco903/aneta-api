<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\m_user_profile;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class Api_Controlleruserprofile extends Controller
{
    public function index()
    {
        return UserResource::collection(UsersModel::with('user_role','institute')->orderBy('id','desc')->get());
    }
}
