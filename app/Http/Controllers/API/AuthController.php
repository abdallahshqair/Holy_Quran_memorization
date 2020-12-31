<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $loginapi=['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($loginapi)){
            $user=Auth::user();
            $token = $user->createToken('login token')->accessToken;
            return response([
                'status'=>'succes',
                'token'=>$token
            ]);

        }else{
        return response(
            ['status' => 'error',
             'message=>incalid auth'
            ]);}


    }
}
