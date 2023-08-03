<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //staff

    public function store(Request $request){
        

        $validate_data=$request->validate([
   
        'Firstname'=>['required'],
        'Lastname'=>['required'],
        'staff_number'=>['required'],
        'faculty'=>['required'],
        'department'=>['required'],
        'email'=>['required'],
        'mobile_number'=>['required'],
        'password'=>['required'],
         ]);

        
         $data=Staff::create([
            //database original name ' 
            'local'=>$validate_data['local'],
        'Firstname'=>$validate_data['Firstname'],
        'Lastname'=>$validate_data['Lastname'],
        'staff_number'=>$validate_data['staff_number'],
        'faculty'=>$validate_data['faculty'],
        'department'=>$validate_data['department'],
        'email'=>$validate_data['email'],
        'mobile_number'=>$validate_data['mobile_number'],
        'password'=>$validate_data['password'],
         ]);

         return response()->json(['data'=>$data]);
    }

}
