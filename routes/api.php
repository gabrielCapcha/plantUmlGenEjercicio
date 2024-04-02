<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SaleOrderController;
use App\Http\Controllers\PurchaseOrderController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('/Enterprise', EnterpriseController::class);
Route::post('/Enterprise/asignRuc', 'EnterpriseController@asignRuc');
Route::post('/User/register', 'UserController@register');
Route::post('/User/login', 'UserController@login');
Route::post('/User/logout', 'UserController@logout');
Route::resource('/Department', DepartmentController::class);
Route::resource('/Employee', EmployeeController::class);
Route::resource('/Product', ProductController::class);
Route::resource('/Provider', ProviderController::class);
Route::resource('/SaleOrder', SaleOrderController::class);
Route::post('/SaleOrder/removeStock', 'SaleOrderController@removeStock');
Route::resource('/PurchaseOrder', PurchaseOrderController::class);
Route::post('/PurchaseOrder/addStock', 'PurchaseOrderController@addStock');
