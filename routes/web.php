<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function()
{
    return view('home');
})->name('home');
Route::get('/about', function()
{
    return view('about');
});
Route::get('/tr-search', function()
{
    return view('trademarkSearch');
});
Route::get('/company-formation', function()
{
    return view('companyFormation');
});
Route::get('/amazon-registry', function()
{
    return view('amazonReg');
});
Route::get('/copyright-registration', function()
{
    return view('copyrightReg');
});
Route::get('/web-design-services', function()
{
    return view('webDesign');
});
Route::get('/contact-us', function()
{
    return view('contact_us');
});


Route::middleware(['session'])->group(function () {
    Route::get('/adminPortal', [UserController::class, 'index'])->name('adminPortal');
});

// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/registerUser', [UserController::class, 'create'])->name('register.form');

Route::post('/registerUser', [UserController::class, 'store'])->name('register.submit');

Route::group(['middleware' => 'registration'], function () {
    Route::get('/register/step1/{userID}', [RegistrationController::class, 'step1'])->name('register.step1');
    Route::post('/register/step1', [RegistrationController::class, 'postStep1'])->name('store.step1');
    Route::get('/register/step2/{userID}', [RegistrationController::class, 'step2'])->name('register.step2');
    Route::post('/register/step2', [RegistrationController::class, 'postStep2'])->name('store.step2');
    Route::get('/register/step3/{order_id}', [RegistrationController::class, 'step3'])->name('register.step3');
    Route::post('/register/step3', [RegistrationController::class, 'postStep3'])->name('store.step3');
    Route::get('/thankyou', function()
{
    return view('layouts.thankyou');
});



});

// Route::get('/thankyou', [RegistrationController::class, 'thankyou']);



Route::get('/send', [RegistrationController::class, 'sendEmail']);

// Route::get('/step2', [RegistrationController::class, 'step2'])->name('register.step2');
//Route::post('/step1', [RegistrationController::class, 'postStep1']);

Route::post('/step2', [RegistrationController::class, 'postStep2']);


Route::get('/step3', [RegistrationController::class, 'step3']);
Route::post('/step3', [RegistrationController::class, 'postStep3']);
