<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('redirect', [AuthController::class, 'redirect'])->name('redirect');


Route::get('/', [AuthController::class, 'index'])->name('/');



Route::get('login', [AuthController::class, 'login'])->name('login')->withoutMiddleware([AdminMiddleware::class]);
Route::post('login-user', [AuthController::class, 'loginUser'])->name('login-user')->withoutMiddleware([AdminMiddleware::class]);


Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('register-user', [AuthController::class, 'registerUser'])->name('register-user');
// Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AdminController::class, 'logoutUser'])->name('logout');



Route::prefix('admin')->Middleware(['auth','isAdmin'])->group(function(){
   

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
   
    Route::get('category', [AdminController::class, 'categoryView'])->name('category');
    Route::post('addcategory', [AdminController::class, 'categoryAdd'])->name('addcategory');
    Route::delete('deletecategory/{id}', [AdminController::class, 'categoryDelete'])->name('deletecategory');
    Route::get('product', [ProductController::class, 'index'])->name('product');
    Route::post('addproduct', [ProductController::class, 'store'])->name('addproduct');
    Route::get('showproduct', [ProductController::class, 'show'])->name('showproduct');
    Route::get('editproduct/{id}', [ProductController::class, 'edit'])->name('editproduct');
    Route::post('updateproduct/{id}', [ProductController::class, 'update'])->name('updateproduct');


    Route::delete('deleteproduct/{id}', [ProductController::class, 'destroy'])->name('deleteproduct');
    // Route::post('addcart/{id}', [AuthController::class, 'addCart'])->name('addcart');
    Route::get('user', [UserController::class, 'index'])->name('user');

    Route::get('userview/{id}', [UserController::class, 'viewUser'])->name('userview');

    Route::get('employee', [EmployeeController::class, 'index'])->name('employee');
    Route::post('addemployee', [EmployeeController::class, 'store'])->name('addemployee');
    Route::get('showemployee', [EmployeeController::class, 'show'])->name('showemployee');
    Route::get('editemployee/{id}', [EmployeeController::class, 'edit'])->name('editemployee');
    Route::put('updateemployee/{id}', [EmployeeController::class, 'update'])->name('updateemployee');
    Route::delete('deleteemployee/{id}', [EmployeeController::class, 'destroy'])->name('deleteemployee');
});





