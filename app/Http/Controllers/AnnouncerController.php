<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\announcer;

class AnnouncerController extends Controller
{
    //announcer

    public function store(Request $request){
        
        
        $validate_data=$request->validate([
        'localID'=>['required'],
        'Fullname'=>['required'],
        'academic_year'=>['required'],
        'experience_time'=>['required'],
        'courses'=>['required'],
        'event'=>['required'],
        'email'=>['required'],
        'contact_number'=>['required'],
        'path'=>['required'],


         ]);
        
         

         $data=announcer::create([
            //database original name ' 
        'local_id'=>$validate_data['localID'],
        'Fullname'=>$validate_data['Fullname'],
        'academic_year'=>$validate_data['academic_year'],
        'experience_time'=>$validate_data['experience_time'],
        'courses'=>$validate_data['courses'],
        'event'=>$validate_data['event'],
        'email'=>$validate_data['email'],
        'contact_number'=>$validate_data['contact_number'],
        'path'=>$validate_data['path'],
         ]);

         return response()->json(['data'=>$data,'message'=>'request send']);
    }


    

}
