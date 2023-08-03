<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phographyIdCreator;
class PhographyIdCreatorController extends Controller
{
    public function sendData(Request $request){


        $validate_data=$request->validate([
        'photographyID'=>['required'],
        'requestId'=>['required'],
        'newId'=>['required'],
        'fullname'=>['required'],
        ]);
        
        $data=phographyIdCreator::create([
            'photographyID'=>$validate_data['photographyID'],
            'memberId'=>$validate_data['requestId'],
            'NewAdminCreateID'=>$validate_data['newId'],
            'fullname'=>$validate_data['fullname'],
            ]);
        
        return response()->json(['data'=>$data,'message'=>'ID send successfully']);
    }
}
