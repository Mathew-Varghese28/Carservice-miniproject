<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\servicedetailscontroller;
use App\Http\Controllers\adminlogincontroller;
use App\Http\Controllers\feedbackformcontroller;
use App\Http\Controllers\addemployeecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/adminregister",[adminlogincontroller::class,'create']);

Route::post("/adminregisterread",[adminlogincontroller::class,'store']);




Route::get("/",[adminlogincontroller::class,'home']);

Route::get("/photogalary",[adminlogincontroller::class,'gallery']);


Route::get("/servicedetails",[servicedetailscontroller::class,'details']);

Route::get("/feedbackform",[feedbackformcontroller::class,'details']);

Route::get("/servicephonesearch",[servicedetailscontroller::class,'searchservice']);

Route::post("/viewphonenosearchdetails",[servicedetailscontroller::class,'searchservicedetails']);


//feedback
Route::post("/feedbackformread",[feedbackformcontroller::class,'store']);

//servicedetails
Route::post("/servicedetailsread",[servicedetailscontroller::class,'store']);

//update & edit service
Route::post("/serviceeditprocess/{id}",[servicedetailscontroller::class,'update']);


//search
Route::post('/servicesearch',[servicedetailscontroller::class,'search']);

//delete service
Route::post("/servicedeleteprocess/{id}",[servicedetailscontroller::class,'destroy']);

//admin login
Route::post('/logs',[adminlogincontroller::class,'logs']);

//add Employee

Route::post("/addemployeeread",[addemployeecontroller::class,'store']);

Route::post("/addemployeeprocess/{id}",[addemployeecontroller::class,'update']);

Route::post("/addemployeedeleteprocess/{id}",[addemployeecontroller::class,'destroy']);

Route::post('/employeesearch',[addemployeecontroller::class,'search']);

Route::post('/feedbacksearch',[feedbackformcontroller::class,'search']);


//logout
Route::get('/logout',[adminlogincontroller::class,'logout']);



Route::group(['middleware'=>['AuthCheck']],function(){

   




    


    Route::get("/adminloginenter",[adminlogincontroller::class,'index']);

    Route::get("/adminlogin",[adminlogincontroller::class,'login']);

    Route::get("/adminloginenter",[adminlogincontroller::class,'index']);

    Route::get("/service/{id}/edit",[servicedetailscontroller::class,'edit']);
    Route::get("/service/{id}/delete",[servicedetailscontroller::class,'deleteview']);

    Route::get("/addemployee",[addemployeecontroller::class,'create']);
    Route::get("/viewallemployee",[addemployeecontroller::class,'index']);
    Route::get("/addemployee/{id}/edit",[addemployeecontroller::class,'edit']);
    Route::get("/addemployee/{id}/delete",[addemployeecontroller::class,'deleteview']);

    Route::get("/viewallservices",[servicedetailscontroller::class,'index']);

    Route::get("/userfeedbackform",[feedbackformcontroller::class,'create']);
    Route::get("/viewallfeedback",[feedbackformcontroller::class,'index']);

    Route::get("/userservicedetails",[servicedetailscontroller::class,'create']);
});