<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_us;

class ContactUsController extends Controller
{
    //contact_us

    public function store(Request $request){
        
        $validate_data=$request->validate([
        'name'=>['required'],
        'email'=>['required'],
        'contact_number'=>['required'],
        'message'=>['required'],
    
         ]);
        
        

         $data=contact_us::create([
            //database original name ' 
        'name'=>$validate_data['name'],
        'email'=>$validate_data['email'],
        'contact_number'=>$validate_data['contact_number'],
        'message'=>$validate_data['message'],

         ]);

         return response()->json(['data'=>$data]);
    }


}
