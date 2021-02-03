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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/users', 'admin\UsersController@index')->name('users');
Route::get('/admin/assets', 'admin\AssetsController@index')->name('assets');
Route::post('/admin/assets/add', 'admin\AssetsController@submit')->name('assets.add');

Route::get('/admin/management_risk/', 'admin\ManagementRiskController@index')->name('management_risk');
Route::get('/admin/expectation_on_investment/', 'admin\ExpectationOnInvesmentController@index')->name('expectation_on_investment');
Route::get('/admin/investments_goal/', 'admin\InvestationGoalController@index')->name('investments_goal');



