<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('/product')->group(function(){
     Route::get('/', [ProductController::class, 'index'])->name('product');
     Route::post('/store', [ProductController::class, 'store'])->name('product.store');
     Route::get('/store/view', [ProductController::class, 'view'])->name('product.store.view');
     Route::get('/{task_id}/delete', [ProductController::class, 'delete'])->name('product.delete');
     Route::get('/{task_id}/done', [ProductController::class, 'done'])->name('product.done');



});


/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
