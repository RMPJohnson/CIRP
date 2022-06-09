<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
/*use App\Http\Controllers\BrokerController;

use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RisktagsController;*/

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
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', function () {
        return view('directory');
    });
    Route::prefix('administrator')->group(function () {
        Auth::routes();
        Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');

        Route::get('/change-password', [UserController::class, 'ChangePassword'])->name('change-password');
        Route::post('/change-password',[UserController::class, 'saveChangePassword'])->name('user.change-password');
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('/create', [UserController::class, 'create'])->name('users.create');
            Route::post('/create', [UserController::class, 'store'])->name('users.store');
            Route::get('/{user}/show', [UserController::class, 'show'])->name('users.show');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::patch('/{user}/update', [UserController::class, 'update'])->name('users.update');
            Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
            Route::get('/{user}/status', [UserController::class, 'status'])->name('users.status');

            Route::resource('roles', RolesController::class);
            Route::resource('permissions', PermissionsController::class);
        });
        Route::resource('broker', BrokerController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('risktags', RisktagsController::class);
        Route::resource('questionnaire', QuestionnaireController::class);
        Route::resource('insurance', InsuranceController::class);

        Route::group(['prefix' => 'clients'], function() {
            Route::get('/', [ClientController::class, 'index'])->name('clients.index');
            Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
            Route::post('/create', [ClientController::class, 'store'])->name('clients.store');
            Route::get('/{user}/show', [ClientController::class, 'show'])->name('clients.show');
            Route::get('/{user}/edit', [ClientController::class, 'edit'])->name('clients.edit');
            Route::patch('/{user}/update', [ClientController::class, 'update'])->name('clients.update');
            Route::delete('/{user}/delete', [ClientController::class, 'destroy'])->name('clients.destroy');
            Route::get('/{user}/status', [ClientController::class, 'status'])->name('clients.status');
            Route::get('/products', [ClientController::class, 'products'])->name('clients.products');
        });





    });

});
