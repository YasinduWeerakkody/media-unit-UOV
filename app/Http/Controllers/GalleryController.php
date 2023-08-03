<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;

class GalleryController extends Controller
{
    //gallery

    public function store(Request $request){
        
        $validate_data=$request->validate([
        'image_name'=>['required'],
        'image_dir'=>['required'],
    
         ]);
        
        

         $data=gallery::create([
            //database original name ' 
        'image_name'=>$validate_data['image_name'],
        'image_dir'=>$validate_data['image_dir'],

         ]);

         return response()->json(['data'=>$data]);
    }


}
