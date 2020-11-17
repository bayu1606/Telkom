<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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


//  Route::resource('projects', ProjectController::class);
Route::prefix('/')->group(function ()
{
Route::get('/','ProjectController@index')->name('projects.index');
Route::post('/import_excel', 'ProjectController@import_excel');
Route::get('/upload', 'ProjectController@upload');
Route::get('/export', 'ProjectController@export');
});
