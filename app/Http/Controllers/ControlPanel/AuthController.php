<?php

namespace App\Http\Controllers\ControlPanel;
use App\Http\Controllers\Controller;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('control panel.auth.login');

    }
    public function authenticate(Request $request){
            $login_request=[
              'email' =>$request->email,'password'=> $request->password
            ];
        if(Auth::attempt($login_request)){

            return redirect()->route('home');
        }
//        return redirect()->back()->with('error','خطأ في اسم المستخدم أو كلمة المرور');

    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

//        return redirect()->route('frontsite.home');
    }

    public function register()
    {
        return view('control panel.auth.register');
    }

    public function registered(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'name' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success','تم إنشاء مستخدم بنجاح');
    }


}
