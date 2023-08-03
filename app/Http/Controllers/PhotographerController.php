<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photographer;
use App\Models\phographyIdCreator;

class PhotographerController extends Controller
{
    //photographer

    public function store(Request $request){
        
        $validate_data=$request->validate([
        'localID'=>['required'],
        'Fullname'=>['required'],
        'academic_year'=>['required'],
        'experience_time'=>['required'],
        'company_name'=>['required'],
        'courses'=>['required'],
        'devices'=>['required'],
        'email'=>['required'],
        'contact_number'=>['required'],
         ]);

         
         $data=photographer::create([
            
        'local_id'=>$validate_data['localID'],
        'Fullname'=>$validate_data['Fullname'],
        'academic_year'=>$validate_data['academic_year'],
        'experience_time'=>$validate_data['experience_time'],
        'company_name'=>$validate_data['company_name'],
        'courses'=>$validate_data['courses'],
        'devices'=>$validate_data['devices'],
        'email'=>$validate_data['email'],
        'contact_number'=>$validate_data['contact_number'],

         ]);

         
         return response()->json(['data'=>$data,'message'=>'Request Send']);
    }


        public function getss(){
            
           
            $data=photographer::get();

            return response()->json(['data'=>$data]);
        }

        public function authenicate(Request $request){
            
            $AdminCreateId=$request->userid;
            $localHostID=$request->localhostId;

            // $data=phographyIdCreator::get();

            // $memberId= $data->memberId;
            // $photographyIDs= $data->photographyID;

            
            $data=phographyIdCreator::where('memberId',$localHostID)
            ->where('NewAdminCreateID',$AdminCreateId)->first();

          

            if($data){
                if($data->memberId==$localHostID || $data->NewAdminCreateID==$AdminCreateId){
                    return response()->json(['data'=>$data,'status'=>'200','message'=>'login succssfully']);
                }
                
            }
            else{
                return response()->json(['status'=>'500','message'=>'login succssfully']);
            }
            

        }
}
