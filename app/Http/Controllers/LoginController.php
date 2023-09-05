<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'login',
            'active'=>'login'
        ]);
    }

    public function authentication(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            // intended adalah sebuah method yang disediakan laravel 
            // yang akan melakukan redirect usernya kesebuah URL
            // sebelum melewati authentication middelwere

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'login vailed');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
