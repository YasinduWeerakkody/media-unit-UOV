<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    public function store(Request $request){
        

        $validate_data=$request->validate([
        'Firstname'=>['required'],
        'Lastname'=>['required'],
        'registration_number'=>['required'],
        'faculty'=>['required'],
        'email'=>['required'],
        'mobile_number'=>['required'],
        'academic_year'=>['required'],
        'password'=>['required'],
         ]);

        
         $data=student::create([
            //database original name ' 
        'Firstname'=>$validate_data['Firstname'],
        'Lastname'=>$validate_data['Lastname'],
        'registration_number'=>$validate_data['registration_number'],
        'faculty'=>$validate_data['faculty'],
        'email'=>$validate_data['email'],
        'mobile_number'=>$validate_data['mobile_number'],
        'academic_year'=>$validate_data['academic_year'],
        'password'=>$validate_data['password'],
         ]);

         return response()->json(['data'=>$data]);
    }
}
