<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogOfCoursesController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ListOfTeacherController;
use App\Http\Controllers\MagazineGroupController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScheduleTabController;
use App\Http\Controllers\TuitionPaymentController;
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
Route::prefix('CatalogOfCourses')->group(function(){
    Route::get('/',[CatalogOfCoursesController::Class,'index']);
    Route::get('/{id}',[CatalogOfCoursesController::Class,'show']);
    Route::post('/',[CatalogOfCoursesController::Class,'store']);
    Route::delete('/{id}',[CatalogOfCoursesController::Class,'destroy']);
    Route::put('/',[CatalogOfCoursesController::Class,'update']);
});

Route::prefix('Contract')->group(function(){
Route::get('/',[ContractController::Class,'index']);
Route::get('/{id}',[ContractController::Class,'show']);
Route::post('/',[ContractController::Class,'store']);
Route::delete('/{id}',[ContractController::Class,'destroy']);
Route::put('/',[ContractController::Class,'update']);
});

Route::prefix('Curriculum')->group(function(){
Route::get('/',[CurriculumController::Class,'index']);
Route::get('/{id}',[CurriculumController::Class,'show']);
Route::post('/',[CurriculumController::Class,'store']);
Route::delete('/{id}',[CurriculumController::Class,'destroy']);
Route::put('/',[CurriculumController::Class,'update']);
});
Route::prefix('Day')->group(function(){
Route::get('/',[DayController::Class,'index']);
Route::get('/{id}',[DayController::Class,'show']);
Route::post('/',[DayController::Class,'store']);
Route::delete('/{id}',[DayController::Class,'destroy']);
Route::put('/',[DayController::Class,'update']);
});
Route::prefix('Group')->group(function(){
Route::get('/',[GroupController::Class,'index']);
Route::get('/{id}',[GroupController::Class,'show']);
Route::post('/',[GroupController::Class,'store']);
Route::delete('/{id}',[GroupController::Class,'destroy']);
Route::put('/',[GroupController::Class,'update']);
});
Route::prefix('ListOfTeacher')->group(function(){
Route::get('/',[ListOfTeacherController::Class,'index']);
Route::get('/{id}',[ListOfTeacherController::Class,'show']);
Route::post('/',[ListOfTeacherController::Class,'store']);
Route::delete('/{id}',[ListOfTeacherController::Class,'destroy']);
Route::put('/',[ListOfTeacherController::Class,'update']);
});
Route::prefix('MagazineGroup')->group(function(){
Route::get('/',[MagazineGroupController::Class,'index']);
Route::get('/{id}',[MagazineGroupController::Class,'show']);
Route::post('/',[MagazineGroupController::Class,'store']);
Route::delete('/{id}',[MagazineGroupController::Class,'destroy']);
Route::put('/',[MagazineGroupController::Class,'update']);
});
Route::prefix('Schedule')->group(function(){
Route::get('/',[ScheduleController::Class,'index']);
Route::get('/{id}',[ScheduleController::Class,'show']);
Route::post('/',[ScheduleController::Class,'store']);
Route::delete('/{id}',[ScheduleController::Class,'destroy']);
Route::put('/',[ScheduleController::Class,'update']);
});
Route::prefix('ScheduleTab')->group(function(){
Route::get('/',[ScheduleTabController::Class,'index']);
Route::get('/{id}',[ScheduleTabController::Class,'show']);
Route::post('/',[ScheduleTabController::Class,'store']);
Route::delete('/{id}',[ScheduleTabController::Class,'destroy']);
Route::put('/',[ScheduleController::Class,'update']);
});
Route::prefix('TuitionPayment')->group(function(){
Route::get('/',[TuitionPaymentController::Class,'index']);
Route::get('/{id}',[TuitionPaymentController::Class,'show']);
Route::post('/',[TuitionPaymentController::Class,'store']);
Route::delete('/{id}',[TuitionPaymentController::Class,'destroy']);
Route::put('/',[TuitionPaymentController::Class,'update']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
