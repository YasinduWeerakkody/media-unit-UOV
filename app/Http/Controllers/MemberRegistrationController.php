<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\memberRegistration;

class MemberRegistrationController extends Controller
{
    public function mbr(Request $request){
       

        

            $validate_data=$request->validate([

            'Firstname'=>['required'],
            'Lastname'=>['required'],
            'registration_number'=>['required'],
            'age'=>['required'],
            'academic_year'=>['required'],
            'faculty'=>['required'],
            'department'=>['required'],
            'contact_number'=>['required'],
            'birthdate'=>['required'],
            'address'=>['required'],
            'city'=>['required'],
            'province'=>['required'],
            'district'=>['required'],
            'gender'=>['required'],
            'postal_code'=>['required'],
            'username'=>['required'],
            'email'=>['required'],
            'password'=>['required'],

            ]);
            
       
            $data=memberRegistration::create([
            'Firstname'=> $validate_data['Firstname'],
            'Lastname'=> $validate_data['Lastname'],
            'registration_number'=> $validate_data['registration_number'],
            'age'=> $validate_data['age'],
            'academic_year'=> $validate_data['academic_year'],
            'faculty'=> $validate_data['faculty'],
            'department'=> $validate_data['department'],
            'contact_number'=> $validate_data['contact_number'],
            'birthdate'=> $validate_data['birthdate'],
            'address'=> $validate_data['address'],
            'city'=> $validate_data['city'],
            'province'=> $validate_data['province'],
            'district'=> $validate_data['district'],
            'gender'=> $validate_data['gender'],
            'postal_code'=> $validate_data['postal_code'],
            'username'=> $validate_data['username'],
            'email'=> $validate_data['email'],
            'password'=> $validate_data['password'],
            ]);

            return response()->json(['data'=>$data,'message'=>'registration successfully','status'=>'200']);
    }
}
