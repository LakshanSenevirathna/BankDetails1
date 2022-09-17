<?php

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

Route::get('/', 'BankDetailsController@dashboard');

Route::get('/login', 'BankDetailsController@login');

Route::get('/addBankDetails', 'BankDetailsController@addBankDetails');

Route::post('/addBankDetailsRoute', 'BankDetailsController@addBankDetailsSave');

Route::get('/viewAll', function () {
    $allData=App\Models\BankDetailsModel::all();
    return view('viewAll') -> with('viewAll', $allData);
});

Route::get('/deleteBank/{id}', 'BankDetailsController@deleteBank');

Route::get('/updateBank/{id}', 'BankDetailsController@updateBankDetails');

Route::post('/updateBankDB', 'BankDetailsController@updateBankDB');
