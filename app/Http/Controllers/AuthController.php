<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request){
        $validation = $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'matricule'=>'bail|required|unique:App\User,matricule',
            'email' => 'required',
            'username' => 'bail|required|unique:App\User,username',
            'password' => 'bail|required|min:6',
            'confirm' => 'bail|required|min:6'
        ]);   
        
        User::create([
            'name'=> strtoupper($validation['name']),
            'email' => $validation['email'],
            'surname' => strtoupper($validation['surname']),
            'matricule' => strtoupper($validation['matricule']),
            'username' => $validation['username'],
            'password' => bcrypt($validation['password'])
        ]);

        if(Auth::attempt(['username' => $validation['username'], 'password' => $validation['password']])){
            return redirect()->route('user.index');
        }
        
        return redirect()->route('home');
    }

    public function signin(Request $request){
        $data = $request->validate([
            'lgusername'=>'required',
            'lgpassword'=> 'required'
        ]);

        if (Auth::attempt(['username' => $data['lgusername'], 'password' => $data['lgpassword']])) {
            return redirect()->route('user.index');
        }
        return redirect()->route('home');
    }

    public function signout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }
}
