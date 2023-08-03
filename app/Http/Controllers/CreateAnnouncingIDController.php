<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\createAnnouncingID;
use App\Models\announcer;

class CreateAnnouncingIDController extends Controller
{



    public function saving(Request $request){

    
        
        $validate_data=$request->validate([
        'AdminCreateID'=>['required'],
        'memberID'=>['required'],
        'announcingID'=>['required'],
        'Fullname'=>['required'],
        ]);
       
       

        $data=createAnnouncingID::create([
            'announcingID'=>$validate_data['announcingID'],
            'memberID'=>$validate_data['memberID'],
            'AdminCreateID'=>$validate_data['AdminCreateID'],
            'Fullname'=>$validate_data['Fullname'],
            ]);
           
        return response()->json(['data'=>$data,'message'=>'ID send successfully']);
    }

    
///////////////////////////////////////////////Authenticate Need to be fix
public function authenicate(Request $request){
            
    
    $AdminCreateId=$request->userid;
    $localHostID=$request->localhostId;
    
    $data=createAnnouncingID::where('memberId',$localHostID)
    ->where('AdminCreateID',$AdminCreateId)->get()->first();

  
   
      
        if($data->memberId==$localHostID && $data->AdminCreateID==$AdminCreateId){

            // return response()->json(['data'=>$data,'status'=>'200','message'=>'login succssfully']);
        }
        
  
    else{
        return response()->json(['status'=>'500','message'=>'incorrect username or password']);
    }
    

}

    public function getdetail(){
        $data=announcer::get();

        return response()->json(['data'=>$data,'status'=>'200']);
    }

}
