<?php

namespace App\Http\Controllers;
use App\Models\createArticalID;

use Illuminate\Http\Request;

class CreateArticalIDController extends Controller
{
    
    public function setArticle(Request $request){

     
       

        $validate_data=$request->validate([
            'articleID'=>['required'],
            'memberID'=>['required'],
            'AdminCreateID'=>['required'],
            'Fullname'=>['required'],
        ]);
        

        $data=createArticalID::create([
            'articleID'=>$validate_data['articleID'],
            'memberID'=>$validate_data['memberID'],
            'AdminCreateID'=>$validate_data['AdminCreateID'],
            'Fullname'=>$validate_data['Fullname'],
            ]);
        
        return response()->json(['data'=>$data,'message'=>'ID send successfully']);
    }

    public function authArticle(Request $request){
            
       


        $AdminCreateId=$request->userid;
        $localHostID=$request->localhostId;

        $data=createArticalID::where('memberID',$localHostID)
        ->where('AdminCreateID',$AdminCreateId)->first();

       
        
        // if($data){
        //     return $data;
        //     if($data->memberId==$localHostID || $data->NewAdminCreateID==$AdminCreateId){
        //         // return response()->json(['data'=>$data,'status'=>'200','message'=>'login succssfully']);
        //     }
            
        // }
        // else{
        //     return response()->json(['status'=>'500','message'=>'Incorrct ID or password']);
        // }
 
            if($data->memberID==$localHostID || $data->NewAdminCreateID==$AdminCreateId){
                // return $data;
                        return response()->json(['data'=>$data,'status'=>'200','message'=>'login succssfully']);
                    }
        
        
            else{
                return response()->json(['status'=>'500','message'=>'Check User ID']);
        }

    }


}
