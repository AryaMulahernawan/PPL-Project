<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangKelontongController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route ::get('/dashboard', [App\Http\Controllers\LandingPageController::class,'index']);


Route::get('/barang_kelontong', [BarangKelontongController::class, 'index'])->name('barang_kelontong.index');
Route::get('/create', [BarangKelontongController::class, 'create'])->name('barang_kelontong.create');
Route::post('/barang_kelontong', [BarangKelontongController::class, 'store'])->name('barang_kelontong.store');
Route::get('/barang_kelontong/{id}/edit', [BarangKelontongController::class, 'edit'])->name('barang_kelontong.edit');
Route::put('/barang_kelontong/{id}', [BarangKelontongController::class, 'update'])->name('barang_kelontong.update');
Route::delete('/barang_kelontong/{id}', [BarangKelontongController::class, 'destroy'])->name('barang_kelontong.destroy');