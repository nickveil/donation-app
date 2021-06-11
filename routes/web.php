<?php

use App\Http\Controllers\DonorController;
use App\Models\Donor;
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


Route::get('donors', [DonorController::class,'donors'])->middleware(['auth'])->name('donors');
Route::get('/donor/{donor:id}', [DonorController::class,'show'])->middleware(['auth'])->name('donor');

require __DIR__.'/auth.php';
