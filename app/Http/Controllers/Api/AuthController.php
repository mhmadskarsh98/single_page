<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        //validation

        $valid = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if($valid->failed()){
            return response()->json(['error'=>true, 'message'=>$valid->error()],200); //error 405
        }
        // request data
        $creadintal = request(['email','password']);
        $token = auth('api')->attempt($creadintal);
        if(!$token){
            return response()->json(['error' => true, 'message' => 'unauthorized'], 200);
        }

        return response()->json([
            'access_token'=>$token,
            'expire_in'=> auth('api')->factory()->getTTL()*3600,
        ]);
    }

    public function logout(){

        auth('api')->logout();

        return response()->json(['error'=>false,'message'=>'logout sucessfully'],200);
    }
}
