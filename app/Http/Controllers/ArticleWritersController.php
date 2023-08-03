<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article_writers;

class ArticleWritersController extends Controller
{
    //article_writers

    public function store(Request $request){
       
       

        $validate_data=$request->validate([
        'localID'=>['required'],
        'Fullname'=>['required'],
        'academic_year'=>['required'],
        'article_name'=>['required'],
        'experience_time'=>['required'],
        'digital_post'=>['required'],
        'email'=>['required'],
        'contact_number'=>['required'],
        
         ]);
        
        

         $data=article_writers::create([
            //database original name ' 
        'local_id'=>$validate_data['localID'],
        'Fullname'=>$validate_data['Fullname'],
        'academic_year'=>$validate_data['academic_year'],
        'article_name'=>$validate_data['article_name'],
        'experience_time'=>$validate_data['experience_time'],
        'digital_post'=>$validate_data['digital_post'],
        'email'=>$validate_data['email'],
        'contact_number'=>$validate_data['contact_number'],
         ]);

         return response()->json(['data'=>$data]);
    }


    

    public function getArticle(){
             
        $data=article_writers::get();

        return response()->json(['data'=>$data]);
    }

    
}
