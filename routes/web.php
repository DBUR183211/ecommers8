<?php
use App\Models\product;
use App\Models\catagory;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\controllers\CatagoryController;
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
Route::get('/product/register',[ProductController::class,'register'])->name('product/register');
Route::post('product/register',[ProductController::class,'store'])->name('product/register');
Route::get('/product/list',[productController::class, 'list'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/catagory/register',[catagoryController::class,'register'])->name('catagory/register');
Route::post('catagory/register',[catagoryController::class,'store'])->name('catagory/register');
Route::get('/catagory/list',[catagoryController::class, 'get_all'])->name('catagory/list');
Auth::routes();
