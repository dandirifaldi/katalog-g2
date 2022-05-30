<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HelmController;
use App\Http\Controllers\PanelController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/home', [AdminController::class, 'index']);

Route::get('/helm', [HelmController::class, 'index'])->name('helm');
Route::post('/helm/insert', [HelmController::class, 'insert']);
Route::get('/helm/edit/{id_helm}', [HelmController::class, 'edit']);
Route::post('/helm/update/{id_helm}', [HelmController::class, 'update']);
Route::get('/helm/delete/{id_helm}', [HelmController::class, 'delete']);
Route::get('/helm/detail/{id_helm}', [HelmController::class, 'detail']);

Route::get('/panel',[PanelController::class, 'index']);
Route::get('/panel/detail/{id_helm}', [PanelController::class, 'detail']);

Route::get('/',[HomeController::class, 'index']);
Route::get('/detail/{id_helm}', [HomeController::class, 'detail']);

