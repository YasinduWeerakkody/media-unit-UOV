<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\AnnouncerController;
use App\Http\Controllers\ArticleWritersController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterFormController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\RequestReservationController;
use App\Http\Controllers\MemberRegistrationController;
use App\Http\Controllers\ImagesaverController;
use App\Http\Controllers\AnnouncingSaverController;
use App\Http\Controllers\PhographyIdCreatorController;
use App\Http\Controllers\CreateAnnouncingIDController;
use App\Http\Controllers\CreateArticalIDController;
use App\Http\Controllers\ArticleallController;
use App\Http\Controllers\requestReservationSubmit;
use App\Http\Controllers\IDgetcontroller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//StudentController
Route::post('/student',[StudentController::class,'store']);
//StaffController
Route::post('/Staff',[StaffController::class,'store']);
//PhotographerController
Route::post('/photographer',[PhotographerController::class,'store']);
//AnnouncerController
Route::post('/announcer',[AnnouncerController::class,'store']);
//ArticleWritersController
Route::post('/article_writers',[ArticleWritersController::class,'store']);
//GalleryController
Route::post('/gallery',[GalleryController::class,'store']);
//RegisterFormController
Route::post('/register_form',[RegisterFormController::class,'store']);
//ContactUsController
Route::post('/contact_us',[ContactUsController::class,'store']);
//ArticleController
Route::post('/article',[ArticleController::class,'store']);
Route::post('/authenticate',[authcontroller::class,'store']);

Route::post('/sendrequestReservation',[RequestReservationController::class,'store']);

Route::post('/memberRegistration',[MemberRegistrationController::class,'mbr']);
Route::post('/loginJoin',[authcontroller::class,'request']);
Route::post('/saveimage',[ImagesaverController::class,'request']);
Route::post('/saveimageToArticle',[ArticleController::class,'send']);
Route::post('/saveimageToAnnouncer',[AnnouncingSaverController::class,'sends']);
Route::get('/getPhotgrapperDetail',[PhotographerController::class,'getss']);
Route::post('/sendPhotgrapherID',[PhographyIdCreatorController::class,'sendData']);
Route::post('/authenticatePhotography',[PhotographerController::class,'authenicate']);
Route::get('/getAnnouncerDetails',[CreateAnnouncingIDController::class,'getdetail']);
Route::post('/anouncingSave',[CreateAnnouncingIDController::class,'saving']);
Route::post('/authannouncer',[CreateAnnouncingIDController::class,'authenicate']);
Route::post('/authenticateannouncer',[CreateArticalIDController::class,'authenicate']);
Route::get('/getArticleDetail',[ArticleWritersController::class,'getArticle']);
Route::post('/sendArticleId',[CreateArticalIDController::class,'setArticle']);
Route::post('/authenticateArticle',[CreateArticalIDController::class,'authArticle']);
Route::get('/getImage',[ImagesaverController::class,'sendimage']);
Route::get('/getImageforArticle',[ImagesaverController::class,'getImages']);
Route::get('/getArticleImages',[ArticleallController::class,'getting']);
Route::get('/getAnnounce',[AnnouncingSaverController::class,'getting']);
Route::post('/sendArticle',[ArticleallController::class,'send']);
Route::post('/getuserId',[IDgetcontroller::class,'getDetails']);



// Route::post('/sendrequestReservation',[requestReservationSubmit::class,'setdetails']);
