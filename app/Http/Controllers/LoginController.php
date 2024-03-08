<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function auth(Request $request){

        //dd($request);

        $dados = $request->toArray();
        //dd($dados);

        if(Auth::attempt($dados)){
            $request->session()->regenerate();
            return redirect()->view('home.index');
        }
    }

}
