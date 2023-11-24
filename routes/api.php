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
Route::get('/CatalogOfCourses',[CatalogOfCoursesController::Class,'index']);
Route::get('/Contract',[ContractController::Class,'index']);
Route::get('/Curriculum',[CurriculumController::Class,'index']);
Route::get('/Day',[DayController::Class,'index']);
Route::get('/Group',[GroupController::Class,'index']);
Route::get('/ListOfTeacher',[ListOfTeacherController::Class,'index']);
Route::get('/MagazineGroup',[MagazineGroupController::Class,'index']);
Route::get('/Schedule',[ScheduleController::Class,'index']);
Route::get('/ScheduleTab',[ScheduleTabController::Class,'index']);
Route::get('/TuitionPayment',[TuitionPaymentController::Class,'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
