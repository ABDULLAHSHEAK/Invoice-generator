<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/details/{id}', [ProductController::class, 'detailsView'])->name('details.view')->middleware([TokenVerificationMiddleware::class]);
Route::get('/print/{id}', [ProductController::class,'print'])->name('print.view');

// Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);


// User Logout
Route::get('/logout',[UserController::class,'UserLogout']);


Route::get("/list-user", [UserController::class, 'UserList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/create-user", [UserController::class, 'UserCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/user-by-id", [UserController::class, 'UserByID'])->middleware([TokenVerificationMiddleware::class]);

Route::post('/user-edit-data',[UserController::class,'EditUserData'])->middleware([TokenVerificationMiddleware::class]);




// Page Routes
Route::get('/',[HomeController::class,'HomePage']);
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/allUsers',[UserController::class,'AllUser'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/categoryPage',[CategoryController::class,'CategoryPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/productPage',[ProductController::class,'ProductPage'])->middleware([TokenVerificationMiddleware::class]);




// Product API
Route::post("/create-product",[ProductController::class,'CreateProduct'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-product",[ProductController::class,'DeleteProduct'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-product",[ProductController::class,'UpdateProduct'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-product",[ProductController::class,'ProductList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/product-by-id",[ProductController::class,'ProductByID'])->middleware([TokenVerificationMiddleware::class]);

// SUMMARY & Report
Route::get("/summary", [DashboardController::class, 'Summary'])->middleware([TokenVerificationMiddleware::class]);


//

// Develop by (md abdullah shake)
