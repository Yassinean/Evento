<?php

use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\auth\AuthenticatedSessionController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/**** Routing for auth google ****/
Route::get('auth/google/redirect', [SocialLoginController::class, 'redirect'])->name('auth.socialite.redirect');
Route::get('auth/google/callback', [SocialLoginController::class, 'callback'])->name('auth.socialite.callback');
/**** End routing for auth google ****/


/**** organisateur routing ****/
Route::middleware(['auth', 'CheckRole:organisateur'])->group(function () {
    Route::get('/organisateur/dashboard', [EventController::class, 'index'])->name('organisateur.dashboard');
    Route::post('/organisateur/dashboard/createEvent', [EventController::class, 'store'])->name('createevent');
    Route::delete('/organisateur/dashboard/{id}', [EventController::class, 'destroy'])->name('deleteevent');
    Route::patch('/organisateur/dashboard/{event}', [EventController::class, 'update'])->name('updateevent');
});
/**** end organisateur routing ****/
/**** visiteur routing ****/
Route::get('/', [VisiteurController::class, 'index'])->name('visiteur.home');
Route::get('search', [VisiteurController::class, 'search'])->name('searchname');
Route::get('/filter', [VisiteurController::class, 'index'])->name('filtername');
Route::middleware(['auth', 'CheckRole:visiteur'])->group(function () {
    Route::get('/event/{id}', [VisiteurController::class, 'detailEvent'])->name('singleEvent');
});
/**** end visiteur routing ****/
/**** admin routing ****/
Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::post('/admin/createcategory', [CategorieController::class, 'create'])->name('createcategory');
    Route::put('/admin/updatecategory/{id}', [CategorieController::class, 'update'])->name('updatecategory');
    Route::delete('/admin/deletecategory/{id}', [CategorieController::class, 'destroy'])->name('deletecategory');
    Route::put('/admin/dashboard/{event}', [EventController::class, 'updateStatus'])->name('events.update');
});
/**** end admin routing ****/

require __DIR__ . '/auth.php';