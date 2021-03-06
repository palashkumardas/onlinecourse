<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\TutorialsController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// index page
Route::get('/',[SiteController::class,'IndexPage']);

// account dashboard page
Route::get('/Dashboard', [HomeController::class,'DashboardPage']);

// account tutorials page
Route::get('/Tutorial', [TutorialsController::class,'TutorialPage']);

// account files page
Route::get('/Files', [FilesController::class,'FilesPage']);
Route::get('/getfile',[FilesController::class,'getfileinfo']);
// account message page
Route::get('/Message', [MessagesController::class,'MessagePage']);
Route::get('/getmessage',[MessagesController::class,'getmessage']);
// account certificate page
Route::get('/Certificate',[CertificateController::class,'CertificatePage']);
Route::get('/getCertificateData',[CertificateController::class,'getCertificateinfo']);
Route::post('/AddCertificate',[CertificateController::class,'AddCertificate']);

// account notification page
Route::get('/Notification', [NotificationController::class,'NotificationPage']);

// account profile page
Route::get('/Profile', [ProfileController::class,'ProfilePage']);
