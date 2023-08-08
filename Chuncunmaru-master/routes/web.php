<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/', [BarangController::class, 'index']);

Route::prefix('shoes')->group(function () {
    Route::prefix('woman')->group(function () {
        Route::get('/', [BarangController::class, 'womanShoes']);
    });

    Route::prefix('men')->group(function () {
        Route::get('/', [BarangController::class, 'manShoes']);
    });
});

Route::prefix('clothing')->group(function () {
    Route::prefix('woman')->group(function () {
        Route::get('/', [BarangController::class, 'womanClothes']);
    });

    Route::prefix('men')->group(function () {
        Route::get('/', [BarangController::class, 'manClothes']);
    });
});

Route::prefix('aksesoris')->group(function () {
    Route::prefix('woman')->group(function () {
        Route::get('/', [BarangController::class, 'womanAccesoriss']);
    });

    Route::prefix('men')->group(function () {
        Route::get('/', [BarangController::class, 'manAccesoriss']);
    });
});

Route::get('/product', [BarangController::class, 'product']);
Route::get('/detail/index', [BarangController::class, 'detailBarang']);



// Route::get('/clothing', function () {
//     return view('baju');
// });

// Route::get('/accessories', function () {
//     return view('aksesoris');
// });



