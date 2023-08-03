<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\phographyIdCreator;
use App\Models\createArticalID;
use App\Models\createAnnouncingID;


class IDgetcontroller extends Controller
{
    public function getDetails(Request $request){

        $localId=$request->localId;

        $getAnnouncingIds=createAnnouncingID::select('AdminCreateID')->where('id',$localId)->get();

        $getPhotographyIds=phographyIdCreator::select('NewAdminCreateID')->where('id',$localId)->get();

        $getArticleIds=createArticalID::select('AdminCreateID')->where('id',$localId)->get();

        return response()->json(['data1'=>$getAnnouncingIds,'data2'=>$getPhotographyIds,'data3'=>$getArticleIds]);
    }
}
