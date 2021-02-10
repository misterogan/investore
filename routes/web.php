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

Route::get('/', function () {
    return view('frontend.content.welcome');
});

Route::get('/invest-calclulator', 'CalculatorController@index')->name('users.calculator');
Route::get('/invest-calclulator/{id}', 'CalculatorController@invest_calculator')->name('users.registration');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/admin/users', 'admin\UsersController@index')->name('users');

//ASSET
Route::get('/admin/assets', 'admin\AssetsController@index')->name('assets');
Route::post('/admin/assets/add', 'admin\AssetsController@submit')->name('assets.add');
Route::post('/admin/assets/update', 'admin\AssetsController@update')->name('assets.add');

//MANAGEMENT RISK
Route::get('/admin/management_risk/', 'admin\ManagementRiskController@index')->name('management_risk');
Route::post('/admin/management_risk/add', 'admin\ManagementRiskController@submit')->name('management_risk.add');
Route::post('/admin/management_risk/update', 'admin\ManagementRiskController@update')->name('management_risk.update');

//EXPECTATION
Route::get('/admin/expectation_on_investment/','admin\ExpectationOnInvesmentController@index')->name('expectation_on_investment');
Route::post('/admin/expectation_on_investment/add', 'admin\expectation_on_investment@submit')->name('expectation_on_investment.add');
Route::get('/admin/investments_goal/', 'admin\InvestationGoalController@index')->name('investments_goal');



