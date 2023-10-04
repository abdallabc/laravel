<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function store(Request $request){ 
    //     $user_credentials = $request->all();
    //     return dd($user_credentials);
    // }
    public function signup(Request $request){ 
        $user_validated_input = null;
        try {
            $user_validated_input = $request->validate([
                'name' => 'required | min:3',
                'email' => 'required | email | unique:users' ,
                'password' => 'required | min:6'
            ]);
            // return dd($user_validated_input);
            User::create($user_validated_input);
            return redirect('/') ->with('msg',"User created successfully.");
        } catch (\Throwable $th) {
            return back()->withInput();
        }
    }
    // public function login(){
    //     // login logic
    // }
    public function login(Request $request){
        // return dd($request->all());
        $user_validated_input = $request->validate([
            'email'=> 'required |email',
            'password'=>'required'
        ]);
       if (Auth::attempt($user_validated_input)){
        return "login successfull";
       } else{
         return "invalid credentials";
       }

    }

}