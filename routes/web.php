<?php

use App\Auth\Login;
use App\Auth\Register;
use App\Auth\ShowLoginPage;
use App\Auth\ShowRegistrationPage;
use App\HomeAction;
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

Route::get('/', HomeAction::class);

Route::get('register', ShowRegistrationPage::class);
Route::post('register', Register::class);

Route::get('login', ShowLoginPage::class);
Route::post('login', Login::class);
