<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonorController;
use App\Models\Campaign;
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


Route::get('donors', [DonorController::class,'donors'],[CampaignController::class, 'campaign'])->middleware(['auth'])->name('donors');
Route::get('/donor/{donor:id}', [DonorController::class,'show'])->middleware(['auth'])->name('donor');
Route::get('/donor/{donor:id}/edit', [DonorController::class,'edit'])->middleware(['auth'])->name('editDonor');
Route::put('/donor/update/{donor:id}', [DonorController::class,'update'])->middleware(['auth'])->name('updateDonor');

Route::get('/campaign/{campaign:id}', [CampaignController::class,'show'])->middleware(['auth'])->name('capaign');
Route::get('/campaign/{campaign:id}/edit', [CampaignController::class,'edit'])->middleware(['auth'])->name('editCampaign');
Route::put('/campaign/update/{campaign:id}', [CampaignController::class,'update'])->middleware(['auth'])->name('updateCampaign');

require __DIR__.'/auth.php';
