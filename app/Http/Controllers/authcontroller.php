<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register_form;
use App\Models\memberRegistration;

class authcontroller extends Controller
{
    public function store(Request $request){


        $username=$request->username;
        $passwords=$request->password;

       
         
        $result=register_form::where('username',$username)->where('password',$passwords)->first();

   

        if($result){
            if($result->username==$username || $result->password==$passwords){
                return response()->json(['data'=>$result,'message'=>'login successfully','status'=>'200']);
            }
            
        }
        
        else{
            return response()->json(['messsage'=>'login failed','status'=>'500']);
        }
    }

    public function request(Request $request){

        
        $username=$request->username;
        $password=$request->password;

       
        $data=memberRegistration::where('username',$username)
        ->where('password',$password)->get()->first();
   
        
        if($data){
            if($data->username==$username || $data->password==$password){
                return response()->json(['data'=>$data,'status'=>'200','message'=>'login successfully']);
            }
            
        }
        else{
            return response()->json(['status'=>'500','message'=>'incorrct username or password']);
        }
    }
}
