<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\AdvertiserController;

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



//English Routes
Route::redirect('/','/en');
Route::get('/en/', function () { return view('english.homepage'); });

//English User Routes
Route::get('/en/user-registration', [UserController::class, 'RegisterFormEn']);
Route::post('/en/register-user', [UserController::class, 'RegisterUserEn']);
Route::get('/en/user-login', [UserController::class, 'LoginFormEn']);
Route::get('/en/car-deals', [UserController::class, 'CarDealEn']);

//English Professional Routes
Route::get('/en/professional-registration', [ProfessionalController::class, 'RegisterFormEn']);
Route::post('/en/register-professional', [ProfessionalController::class, 'RegisterProfessionalEn']);
Route::get('/en/professional-login', [ProfessionalController::class, 'LoginFormEn']);

//English Advertiser Routes
Route::get('/en/advertiser-registration', [AdvertiserController::class, 'RegisterFormEn']);
Route::post('/en/register-advertiser', [AdvertiserController::class, 'RegisterAdvertiserEn']);
Route::get('/en/advertiser-login', [AdvertiserController::class, 'LoginFormEn']);


//French Routes
Route::get('/fr/', function () { return view('french.homepage'); });

//French User Routes
Route::get('/fr/user-registration', [UserController::class, 'RegisterFormFr']);
Route::post('/fr/register-user', [UserController::class, 'RegisterUserFr']);
Route::get('/fr/user-login',[UserController::class, 'LoginFormFr']);

//French Professional Routes
Route::get('/fr/professional-registration', function(){    return view('french.professional.register');     });
Route::get('/fr/professional-login', function(){    return view('french.professional.login');   });