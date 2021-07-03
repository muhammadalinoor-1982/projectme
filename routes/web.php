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
    return view('welcome');
});

Route::get('main','mainController@index')->name('main');

route::middleware('auth')->prefix('admin')->group(function() {
    Route::resource('agent_summary', 'AgentSummaryController');
    Route::post('agent_summary/{id}/restore', 'AgentSummaryController@restore')->name('agent_summary.restore');
    Route::delete('agent_summary/{id}/delete', 'AgentSummaryController@delete')->name('agent_summary.delete');

    Route::resource('csv_agent', 'CsvAgentController');
    Route::post('csv_agent/import','CsvAgentController@import')->name('import');

});

route::middleware('auth')->prefix('user')->group(function() {
Route::resource('threesession','threesessionController');
Route::post ('threesession/{id}/restore', 'threesessionController@restore')->name('threesession.restore');
Route::delete ('threesession/{id}/delete', 'threesessionController@delete')->name('threesession.delete');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
