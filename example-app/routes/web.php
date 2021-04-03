<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EsemenyController;
use App\Http\Controllers\SzekcioController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('speaker/{speaker}', [HomeController::class, 'view'])->name('speaker');
//Route::get('/', 'HomeController@index')->name('home');
//Route::redirect('/home', '/admin');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'index2'])->name('dashboard.dashboard');
//esemeny
Route::get('/admin/esemenyek', [EsemenyController::class, 'index'])->name('dashboard.esemenyek.index');
Route::get('/admin/esemenyek/create', [EsemenyController::class, 'create'])->name('dashboard.esemenyek.create');
Route::get('/admin/esemenyek/edit/{id}', [EsemenyController::class, 'edit'])->name('dashboard.esemenyek.edit');
Route::post('/admin/esemenyek/edit/{id}', [EsemenyController::class, 'update'])->name('dashboard.esemenyek.update');
Route::delete('/admin/esemenyek/delete/{id}', [EsemenyController::class, 'delete'])->name('dashboard.esemenyek.delete');
Route::post('/admin/esemenyek/store', [EsemenyController::class, 'store'])->name('dashboard.esemenyek.store');

//szekciok
Route::get('/admin/szekciok', [SzekcioController::class, 'index'])->name('dashboard.szekciok.index');
Route::get('/admin/szekciok/create', [SzekcioController::class, 'create'])->name('dashboard.szekciok.create');
Route::get('/admin/szekciok/edit/{id}', [SzekcioController::class, 'edit'])->name('dashboard.szekciok.edit');
Route::post('/admin/szekciok/edit/{id}', [SzekcioController::class, 'update'])->name('dashboard.szekciok.update');
Route::delete('/admin/szekciok/delete/{id}', [SzekcioController::class, 'delete'])->name('dashboard.szekciok.delete');
Route::post('/admin/szekciok/store', [SzekcioController::class, 'store'])->name('dashboard.szekciok.store');

