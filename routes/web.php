<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TampilAdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ManajemenMateriController;
use App\Http\Controllers\videoMateri_soalQuizController;
use App\Http\Controllers\ManageUserAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\settingProfileController;
use App\Http\Controllers\paymentUserController;
use App\Http\Controllers\RewardUserController;
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

// yang boleh akses hanya untuk yang belom pernah login
Route::middleware(['guest'])->group(function(){
    Route::get('/',[UserController::class, 'index'])->name('login');
    Route::post('/login',[UserController::class, 'login'])->name('login');

    Route::get('/register', [UserController::class, 'Indexregister'])->name('register');
    Route::post('/postRegister', [UserController::class, 'FromRegister'])->name('postregister');
});

// Route::get('/home', function(){
//     return redirect('/tampilAdmin');
// });

// admin dan logout hanya boleh dijalankan ketika sudah terdaftar
Route::middleware(['auth'])->group(function(){
    // LOGOUT
    Route::get('/logout',[UserController::class, 'logout'])->name('logout');

    // HALAMAN ADMIN
    Route::get('/admin/operator',[TampilAdminController::class, 'indexAdmin'])->middleware('userAkses:operator');
    Route::get('/admin/dashboardAdmin',[TampilAdminController::class, 'dashboardAdmin'])->name('dashboardAdmin')->middleware('userAkses:operator');
   

    // MANAJEMEN COURSE
    Route::get('/admin/course',[CourseController::class, 'indexCourse'])->name('indexCourse')->middleware('userAkses:operator');
    Route::get('/admin/add_course',[CourseController::class, 'addCourse'])->name('addCourse')->middleware('userAkses:operator');
    Route::post('/admin/insertCourse',[CourseController::class, 'insertCourse'])->name('insertCourse')->middleware('userAkses:operator');
    Route::get('/admin/editCourse/{id}',[CourseController::class, 'editCourse'])->name('editCourse')->middleware('userAkses:operator');
    Route::post('/admin/updateCourse/{id}',[CourseController::class, 'updateCourse'])->name('updateCourse')->middleware('userAkses:operator');
    Route::delete('/admin/deleteCourse/{id}',[CourseController::class, 'deleteCourse'])->name('deleteCourse')->middleware('userAkses:operator');

    
    // MANEJEMEN MATERI
    Route::get('/admin/manajemen_materi',[ManajemenMateriController::class, 'index'])->name('indexMateri')->middleware('userAkses:operator');
    Route::get('/admin/search_materi',[ManajemenMateriController::class, 'searchMateri'])->name('search_materi')->middleware('userAkses:operator');

    // VIDEO MATERI & SOAL QUIZ
    Route::get('/admin/videoMateri',[videoMateri_soalQuizController::class, 'indexVideoMateri'])->name('videoMateri')->middleware('userAkses:operator');
    Route::get('/admin/addVideoMateri',[videoMateri_soalQuizController::class, 'addVideoMateri'])->name('addVideoMateri')->middleware('userAkses:operator');
    Route::post('/admin/insertVideoMateri',[videoMateri_soalQuizController::class, 'insertVideoMateri'])->name('insertVideoMateri')->middleware('userAkses:operator');
    Route::get('/admin/editVideoMateri/{id}',[videoMateri_soalQuizController::class, 'editVideoMateri'])->name('editVideoMateri')->middleware('userAkses:operator');
    Route::post('/admin/updateVideoMateri/{id}',[videoMateri_soalQuizController::class, 'updateVideoMateri'])->name('updateVideoMateri')->middleware('userAkses:operator');
    Route::delete('/admin/deleteVideoMateri/{id}',[videoMateri_soalQuizController::class, 'deleteVideoMateri'])->name('deleteVideoMateri')->middleware('userAkses:operator');

    // KELOLA USER ADMIN
    Route::get('/admin/indexKelolaUser',[ManageUserAdminController::class, 'indexKelolaUser'])->name('indexKelolaUser')->middleware('userAkses:operator');
    Route::delete('/admin/deleteKelolaUser/{id}',[ManageUserAdminController::class, 'deleteKelolaUser'])->name('deleteKelolaUser')->middleware('userAkses:operator');
    

    // SETTING PROFILE
    Route::get('/admin/adminSetting',[settingProfileController::class, 'indexSetting'])->name('adminSetting')->middleware('userAkses:operator');
    Route::get('/admin/tampilAdminSetting',[settingProfileController::class, 'tampilSetting'])->name('tampilAdminSetting')->middleware('userAkses:operator');
    Route::post('/admin/insertSettingProfile',[settingProfileController::class, 'insertSettingProfile'])->name('insertSettingProfile')->middleware('userAkses:operator');

    // PAYMENT
    Route::view('/payment','admin.app.payment')->name('payment')->middleware('userAkses:operator');

    // -------------- AKHIR HALAMAN ADMIN---------------



    // HALAMAN USER
    Route::get('/admin/user',[TampilAdminController::class, 'indexUser'])->name('halamanUtama')->middleware('userAkses:user');
    // DASHBOARD USER
    Route::get('/admin/indexDashboardUser',[DashboardUserController::class, 'indexDashboardUser'])->name('indexDashboardUser')->middleware('userAkses:user');
    Route::get('/admin/showDashboard/{id}',[DashboardUserController::class, 'showDashboard'])->name('showDashboard')->middleware('userAkses:user');
    
    // SETTING PROFILE
    Route::get('/admin/indexSetting',[settingProfileController::class, 'indexSetting'])->name('indexSetting')->middleware('userAkses:user');
    Route::get('/admin/tampilSetting',[settingProfileController::class, 'tampilSetting'])->name('tampilSetting')->middleware('userAkses:user');

    // PAYMENT USER
    Route::get('/admin/indexPaymentUser',[paymentUserController::class, 'indexPaymentUser'])->name('indexPaymentUser')->middleware('userAkses:user');

    // REWARD USER
    Route::get('/admin/indexReward',[RewardUserController::class, 'indexReward'])->name('indexReward')->middleware('userAkses:user');
    

});
