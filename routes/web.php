<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SendSmsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReceivedApplicationController as ReceivedApplication;
use App\Http\Controllers\UploadFileController;


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::post('/change-password',[DashboardController::class,'chnagePassword']);
    
    // Job categories routes
    Route::get('/job-categories',[JobController::class,'categories_index']);
    Route::post('/category-add-edit',[JobController::class,'categories_add_edit']);
    Route::post('/category-change-status',[JobController::class,'categories_change_status']);
	Route::get('/departmets',[JobController::class,'departmets']);
	Route::get('/users',[JobController::class,'users']);
	Route::get('/committee',[JobController::class,'committees']);
	Route::get('/job-assign',[JobController::class,'jobAssign']);
	Route::post('/job-assign',[JobController::class,'AddEditjobAssign']);
	Route::post('/user-add-edit',[JobController::class,'userAddEdit']);
	Route::post('/department-add-edit',[JobController::class,'departmetsAddEdit']);

    // Job Type routes
    Route::get('/job-types',[JobController::class,'types_index']);
    Route::post('/type-add-edit',[JobController::class,'type_add_edit']);
    Route::get('/type-change-status',[JobController::class,'types_change_status']);

    // Jobs - posting  routes
    Route::get('/jobs',[JobController::class,'job_posting']);
    Route::post('/job-add-edit',[JobController::class,'job_add_edit']);
    Route::get('/active-jobs',[JobController::class,'active_jobs']);
    Route::get('/job-change-status',[JobController::class,'job_change_status']);
    Route::post('/job-apply',[JobController::class,'Apply'])->name('job-apply');
    Route::get('/receive-application/{job_id}',[ReceivedApplication::class,'getApplyJob']);
	Route::get('/edit-application/{job_id}',[ReceivedApplication::class,'editApplication']);
    Route::get('/edit-job-apply/',[ReceivedApplication::class,'editApplyJob']);

    // candidate route for hr
    Route::get('/received-applications',[ReceivedApplication::class,'appliedCandidate']);
    Route::get('/Shortlisted-applications',[ReceivedApplication::class,'selectCandidate']);
    Route::get('/rejected-applications',[ReceivedApplication::class,'rejectCandidate']);
    Route::get('/application-change-status',[ReceivedApplication::class,'appChangeStatus']);
	Route::get('export-to-excel',[ReceivedApplication::class,'exportToExcel']);

    //user info update
	Route::post('user_info',[UserController::class,'userInfo'])->name('user_info');

    //candidate dashboard profile update
    Route::post('Profile_update',[UserController::class,'Profile_update'])->name('Profile_update');

    //profile progress percentage bar
   


    
});
 // send sms by ajax
 Route::post('/send-sms',[SendSmsController::class,'sendsms']);
 Route::post('/validate-otp',[SendSmsController::class,'validateOtp']);

 Route::get('/',[JobController::class,'job_posting']);
 Route::get('/login',[JobController::class,'job_posting'])->name('login');
 Route::post('/forgot-password',[JobController::class,'forgotPassword'])->name('forgot-password');
 
