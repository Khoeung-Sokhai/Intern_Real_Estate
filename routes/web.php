<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
//admin dashboard
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\admin\UserController;

use App\Http\Controllers\admin\RentController;
use App\Http\Controllers\admin\SaleController;
use App\Http\Controllers\admin\RentalController;
use App\Http\Controllers\admin\ContactAdminController;

//agent dashboard
use App\Http\Controllers\agent\PostController;
use App\Http\Controllers\agent\ContactController;

//frontend
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\AgentController;
use App\Http\Controllers\frontend\ForRentController;
use App\Http\Controllers\frontend\ForRentalController;
use App\Http\Controllers\frontend\ForSaleController;
use App\Http\Controllers\frontend\EditProfileController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\WelcomeController;
use App\Http\Controllers\frontend\MainPropertyController;

use App\Http\Controllers\Auth\ForgetPasswordController;

use Illuminate\Support\Facades\Auth;
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


Route::get('forget-password', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');




//  Route::get('/home', 'HomeController:class', ['index'])
Route::get('/user', function () {
    factory(\App\User::class, 3)->create(); //3 users
});

//front end

Route::resource('/blog', BlogController::class);

Route::get('/contact', [ContactUsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

Route::get('/detail', [DetailController::class, 'create'])->name('detail.create');
Route::post('/detail', [DetailController::class, 'store'])->name('detail.store');

Route::resource('/detail', DetailController::class);
Route::resource('/agent', AgentController::class);
Route::resource('/propertyRent', ForRentController::class);
Route::resource('/propertyRental', ForRentalController::class);
Route::resource('/propertySale', ForSaleController::class);
Route::resource('/', WelcomeController::class);
Route::resource('/property', MainPropertyController::class);
Route::get('editprofile', [UserController::class, 'edit_profile']);

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [WelcomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::resource('/admin/properties', PropertyController::class);
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/rents', RentController::class);
    Route::resource('/admin/sales', SaleController::class);
    Route::resource('/admin/rentals', RentalController::class);
    Route::delete('/deletecover/{id}', [PropertyController::class, 'deletecover']);

    Route::put('/update/{id}', [PropertyController::class, 'update']);
    Route::resource('/admin/contactAdmins', ContactAdminController::class);

    Route::get('admin/property-image/{property_id}/deleteimage', [PropertyController::class, 'deleteimage']);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

    // Route::resource('/agent/contacts', ContactController::class);
    // Route::resource('/agent/posts', PostController::class);

    Route::resource('/manager/contacts', ContactController::class);
    Route::resource('/manager/posts', PostController::class);
    Route::get('manager/property-image/{property_id}/deleteimage', [PostController::class, 'deleteimage']);
   
});



Route::get('/editprofile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
Route::put('/editprofile', [ProfileController::class, 'update_profile'])->name('update_profile');

Route::get('/editpassword', [ProfileController::class, 'changePassword'])->name('change-password');
Route::post('/editpassword', [ProfileController::class, 'updatePassword'])->name('update-password');
