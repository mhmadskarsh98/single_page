<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\GeneralResource;
use App\Models\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //

    public function users(){

        $users = User::all();

        return  GeneralResource::collection($users) ;
    }
}
