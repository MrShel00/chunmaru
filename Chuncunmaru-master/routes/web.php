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
        Route::get('/shoes/woman/sepatu', [BarangController::class, 'sepatuw']);
    });

    Route::prefix('men')->group(function () {
        Route::get('/shoes/men/sepatu', [BarangController::class, 'septaum']);
    });
});

Route::prefix('clothing')->group(function () {
    Route::prefix('woman')->group(function () {
        Route::get('/clothing/woman/baju', [BarangController::class, 'clothesw']);
    });

    Route::prefix('men')->group(function () {
        Route::get('/clothing/men/baju', [BarangController::class, 'clothesm']);
    });
});

Route::prefix('aksesoris')->group(function () {
    Route::prefix('woman')->group(function () {
        Route::get('/accessories/woman/aksesoris', [BarangController::class, 'accesorissw']);
    });

    Route::prefix('men')->group(function () {
        Route::get('/accessories/men/aksesoris', [BarangController::class, 'accesorissm']);
    });
});




// Route::get('/clothing', function () {
//     return view('baju');
// });

// Route::get('/accessories', function () {
//     return view('aksesoris');
// });



