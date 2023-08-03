<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestReservation;

class RequestReservationController extends Controller
{

    public function store(Request $request){

    //   $wanted=$request->wanted;

        $validate_data=$request->validate([
        'localId'=>['required'],
        'fullname'=>['required'],
        'regOrstaffNo'=>['required'],
        'acedamicyr'=>['required'],
        'faculty'=>['required'],
        'department'=>['required'],
        'venue'=>['required'],
        'email'=>['required'],
        'eventdate'=>['required'],
        'contactno'=>['required'],
        'wanted'=>['required'],
        ]);

        $data=RequestReservation::create([
            'regid'=>$validate_data['localId'],
            'fullname'=>$validate_data['fullname'],
            'regOrstaffNo'=>$validate_data['regOrstaffNo'],
            'acedamicyr'=>$validate_data['acedamicyr'],
            'faculty'=>$validate_data['faculty'],
            'department'=>$validate_data['department'],
            'venue'=>$validate_data['venue'],
            'email'=>$validate_data['email'],
            'eventdate'=>$validate_data['eventdate'],
            'contactno'=>$validate_data['contactno'], 
            'wanted'=>$validate_data['wanted'],  
        ]);

        return response()->json(['data'=>$data,'message'=>'Request send successfully','status'=>'200']);
    }
}
