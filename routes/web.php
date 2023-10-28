<?php
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\dishesController;
use App\Http\Controllers\InvoiceDetailsController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'registerForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::resource('customers', customersController::class);
Route::resource('dish', dishesController::class);
Route::resource('orders', ordersController::class);
Route::resource('invoiceDetails', InvoiceDetailsController::class);
Route::resource('reservaciones', ReservationController::class);

Route::post('/dish/{dish}/setActive', 'DishController@setDishActive')->name('dish.setActive');
Route::post('/dish/{dish}/setInactive', 'DishController@setDishInactive')->name('dish.setInactive');
