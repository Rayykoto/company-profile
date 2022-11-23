<?php

use App\Http\Controllers\Admin\{ DashboardController, ArticleController, EventController};
use App\Http\Controllers\Web\{HomeController, ContactController, ProductController};
use Illuminate\Support\Facades\App;
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

Route::get('/', HomeController::class)->name('web.home');
Route::resource('/contact', ContactController::class);
Route::resource('/product', ProductController::class);
Route::get('/past_event', [HomeController::class, 'past_event']);
Route::get('/upcoming_event', [HomeController::class,'upcoming_event']);
Route::resource('/articles', \App\Http\Controllers\Web\ArticleController::class);
// Route::get('home', HomeController::class)

Route::prefix('admin')->group(function() {

    //middleware auth
    Route::group (['middleware' => ['auth']], function () {

        //route dashboard
        Route::get('dashboard', DashboardController::class)->name('admin.dashboard');

        Route::resource('/articles', ArticleController::class, ['as' => 'admin']);
        Route::resource('/events', EventController::class, ['as' => 'admin']);
    });
});
  
   
