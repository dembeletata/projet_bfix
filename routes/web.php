<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AutheController;
use App\Http\Controllers\LoginAdminController;
use App\Models\LoginAdmin;

Route::post('/logo', [AutheController::class, 'logo'])->name('logo');
Route::post('/log', [AutheController::class, 'log'])->name('log');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::post('/demandes/{id_demande}/valider', [DemandeController::class, 'valider'])->name('demandes.valider');
Route::get('', [DemandeController::class, 'acceuil']);
Route::post('/demande/envoie', [DemandeController::class, 'envoyer_demande']);
Route::get('/actualites', [ActualiteController::class, 'afficher_actualite']);
Route::delete('/actualites/{id}', [ActualiteController::class, 'destroy'])->name('actualites.destroy');
Route::delete('/contacts/{id}', [COntactController::class, 'destroy'])->name('contacts.destroy');
Route::post('/message', [ContactController::class, 'envoyer_message']);
Route::get('/connexion', [AutheController::class, 'connexion']);



Route::get('/a_propos', function () {
    return view('a_propos');
});
Route::get('/portail_membre', function () {
    return view('portail_membre');
});
Route::get('/equipe', function () {
    return view('equipe');
});
Route::get('/organisation_du_bfix', function () {
    return view('organisation_du_bfix');
});
Route::get('/gouvernance', function () {
    return view('gouvernance');
});
Route::get('/reglement', function () {
    return view('reglement');
});
Route::get('/adhesion', function () {
    return view('adhesion');
});
Route::get('/procedure_adhesion', function () {
    return view('procedure_adhesion');
});
Route::get('/accords_du_peering', function () {
    return view('accords_du_peering');
});
Route::get('/fiche_adhesion', function () {
    return view('fiche_adhesion');
});


Route::get('/monitoring', function () {
    return view('monitoring/monitoring_orange');
});

Route::middleware(['AdminMiddleware'])->group(function () {

});
    Route::get('/admin', [AdminController::class, 'tableau']);
    Route::get('/admin/dmd', [DemandeController::class, 'dmd']);
    Route::get('/admin/message', [ContactController::class, 'message']);
    Route::get('/admin/actualite', [ActualiteController::class, 'actualite']);
    Route::get('/admin/service', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/admin/ajout_actualite', [ActualiteController::class, 'ajout_actualite']);
Route::get('/loginAdmin', [LoginAdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/createAdmin', [LoginAdminController::class, 'createAdmin']);



Route::middleware(['CheckAuthenticated'])->group(function () {
    Route::get('/monitoring/orange', function () {
        return view('monitoring.orange');
    })->name('monitoring.orange');

    Route::get('/monitoring/moov', function () {
        return view('monitoring.moov');
    })->name('monitoring.moov');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
