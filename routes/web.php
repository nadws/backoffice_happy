<?php

use App\Http\Controllers\Diagnosa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pembukuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    return view('auth.login');
})->name('signin');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('dashboard', $data);
    })->name('dashboard');
});

Route::get('pembukuan', [Pembukuan::class, 'index'])->name('pembukuan');
Route::get('cetak', [Pembukuan::class, 'cetak'])->name('cetak');
Route::get('logout', [Pembukuan::class, 'logout'])->name('logout');

Route::get('diagnosa', [Diagnosa::class, 'index'])->name('diagnosa');
Route::get('view', [Diagnosa::class, 'view'])->name('view');
Route::get('form1', [Diagnosa::class, 'form1'])->name('form1');
Route::get('form2', [Diagnosa::class, 'form2'])->name('form2');
Route::get('form3', [Diagnosa::class, 'form3'])->name('form3');
Route::get('form4', [Diagnosa::class, 'form4'])->name('form4');

require __DIR__ . '/auth.php';
