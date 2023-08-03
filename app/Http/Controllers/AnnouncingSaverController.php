<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\announcingSaver;

class AnnouncingSaverController extends Controller
{
    public function sends(Request $request){
        
        // return $request;

        if ($request->image) {
         
            $post_image = $request->file('image');
            $name_gen = hexdec(uniqid());
            $img_extention = strtolower($post_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_extention;                                  
            $upload_location = 'image/post/';
            $url = $upload_location . $img_name;
            $post_image->move($upload_location, $img_name);


            $title = $request->title;
            $description = $request->description;
            

            $validate_data = $request->validate([
                'localId' => [''],
                'description' => [''],
                'title' => [''],
            ]);
            $reg_id = NULL;
            announcingSaver::create([
                'localId' => $validate_data['localId'],
                'title' => $validate_data['title'],
                'description' => $validate_data['description'],
                'url' => 'http://127.0.0.1:8000/'.$url,
               //  'registrations_id' => $reg_id,

            ]);
        } else {
            return response()->json(['success' => 'Upload a image.']);
        }
        return response()->json(['message' => 'You have successfully upload image.']);
    }

    public function getting(){
        
        $data=announcingSaver::get();

        return response()->json(['data'=>$data,'response'=>'200']);

    }
    
}
