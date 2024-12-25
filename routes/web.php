<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GrowthController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\VerifyTokenMiddleware;

use App\Models\User;
use Illuminate\Support\Facades\Route;

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


//pages

Route::get('/',[UserController::class,'Dashboard'])->name('dashboard')->middleware([VerifyTokenMiddleware::class]);



Route::get('/user-registration',function(){
    return view('register');
})->name('register');

Route::get('/user-login',function(){
    return view('login');
})->name('user-login');

Route::get('/profile',function(){
    return view('profile');
})->name('profile');


// Route::get('/roleselect',[UserController::class,'getRole'])->middleware([VerifyTokenMiddleware::class]);

//Auth
Route::post('/user-regstration',[UserController::class,'UserRegistration']);
Route::post('/login',[UserController::class,'LogIn']);
Route::post('/verifytoken',[UserController::class,'VerifyToken'])->middleware([VerifyTokenMiddleware::class]);
Route::get('/logout',[UserController::class,'LogOut']);

//profile
Route::get('/profileinfo',[UserController::class,'ProfileInfo'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/profileupdate',[UserController::class,'ProfileUpdate'])->middleware([VerifyTokenMiddleware::class]);


//customer
Route::post('/create-customer',[CustomerController::class,'createCustomer'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/update-customer',[CustomerController::class,'updateCustomer'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/delete-customer',[CustomerController::class,'deleteCustomer'])->middleware([VerifyTokenMiddleware::class]);
Route::get('/all-customer',[CustomerController::class,'allCustomer'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/by-id-customer',[CustomerController::class,'byidCustomer'])->middleware([VerifyTokenMiddleware::class]);

//product
Route::post('/create-product',[ProductController::class,'createProduct'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/update-product',[ProductController::class,'updateProduct'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/delete-product',[ProductController::class,'deleteProduct'])->middleware([VerifyTokenMiddleware::class]);
Route::get('/all-product',[ProductController::class,'allProduct'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/by-id-product',[ProductController::class,'byidProduct'])->middleware([VerifyTokenMiddleware::class]);

//invoice
Route::post('/create-invoice',[InvoiceController::class,'createInvoice'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/update-invoice',[InvoiceController::class,'updateInvoice'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/delete-invoice',[InvoiceController::class,'deleteInvoice'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/by-id-invoice',[InvoiceController::class,'byidInvoice'])->middleware([VerifyTokenMiddleware::class]);
Route::get('/all-invoice',[InvoiceController::class,'allInvoice'])->middleware([VerifyTokenMiddleware::class]);

//category
Route::get('/all-category',[CategoryController::class,'allCategory'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/by-id-category',[CategoryController::class,'byidCategory'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/update-category',[CategoryController::class,'updateCategory'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/create-category',[CategoryController::class,'createCategory'])->middleware([VerifyTokenMiddleware::class]);


//Report
Route::post('/total-report',[ReportController::class,'totalReport'])->middleware([VerifyTokenMiddleware::class]);
Route::post('/details-report',[ReportController::class,'detailsReport'])->middleware([VerifyTokenMiddleware::class]);

//sales page

Route::get('/invoice-create',function(){
    return view('pages.sales-page');
})->name('create_invoice');


//customer

Route::get('/customer-list',function(){
    return view('pages.customer-page');
})->name('customerList');


Route::get('/product-list',function(){
    return view('pages.product-page');
})->name('productList');


Route::get('/category-list',function(){
    return view('pages.category-page');
})->name('categoryList');


Route::get('/invoice-list',function(){
    return view('pages.invoice-page');
})->name('invoiceList');


Route::get('/report-list',function(){
    return view('report');
})->name('reportList');

Route::get('/download-page',function(){
    return view('download-report');
})->name('reportPage');


Route::get('/show-map',[GrowthController::class,'showMap'])->middleware([VerifyTokenMiddleware::class]);
