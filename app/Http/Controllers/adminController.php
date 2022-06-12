<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login()
    {
        return view('back.login');
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['kullanici_adi'=>$request->kullanici_adi,'password'=>$request->password])) {
            //Başarılı giriş
            return redirect()->route('admin.dashboard');
        }else{
            //Başarısız giriş
            return redirect()->route('login');
        }
    }
    public function logOut()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
