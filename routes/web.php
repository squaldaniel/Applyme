<?php

use App\Http\Controllers\PortifolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Resources\GraphicResource;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProfileController::class, 'index']);

Route::get('/dashboard', function () {
    $graph = GraphicResource::postJs();
    $count = App\Models\RecruitersModel::get()->count();
    return view('dashboard')->with([
                                "count"=>$count,
                                'graph'=>$graph
                            ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/portifolio/store', [PortifolioController::class, 'store'])->name('portifolio.store');
});
Route::middleware('auth')->prefix('recruiter')->group(function(){
    Route::post('store', [App\Http\Controllers\RecruiterController::class, 'store'])->name('recruiter.store');
    Route::get('index', [App\Http\Controllers\RecruiterController::class, 'index'])->name('recruiter.index');
});
Route::middleware('auth')->prefix('sites')->group(function(){
    Route::get('index', [App\Http\Controllers\SitesController::class, 'index'])->name('sites.index');
    Route::post('store', [App\Http\Controllers\SitesController::class, 'store'])->name('sites.store');
});
Route::middleware('auth')->prefix('portifolio')->group(function(){
    Route::get('index', [App\Http\Controllers\PortifolioController::class, 'index'])->name('portifolio.index');
    // Route::post('store', [App\Http\Controllers\PortifolioController::class, 'store'])->name('portifolio.store');
});
Route::middleware('auth')->prefix('mailtrigger')->group(function(){
    Route::get('index', [App\Http\Controllers\MailTriggerController::class, 'index'])->name('mailtrigger.index');
    // Route::post('store', [App\Http\Controllers\PortifolioController::class, 'store'])->name('portifolio.store');
});

Route::get('test', [App\Http\Controllers\TestController::class, 'index']);

require __DIR__.'/auth.php';
