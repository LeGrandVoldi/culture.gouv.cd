<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\evenementController;
use App\Models\evenement;
use App\Models\Event;

Route::get('/', function () {
    return view('welcome/index');
});

Route::get('/admin', function () {
    return view('welcome');
});
;

Route::get('/agenda', [evenementController::class, 'agenda']);


Route::post('/enregistrement', [evenementController::class, 'store'])->name('enregistrement');
Route::delete('/delete/{id}', [evenementController::class, 'delete'])->name('delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/evenement', function () {
    $events = evenement::paginate(10);
    $id = 1 ;
    $taille = evenement::count();
    return view('evenements', compact('events','id','taille'));
})->name('evenement');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::put('/event/valider/{id}', [EvenementController::class, 'valider'])->name('valider.event');

Route::get('/admin--ministere', function () {
        // Récupérer tous les événements
    $evenements = Event::all();

    // Passer les événements à la vue admin
    return view('admin', compact('evenements'));
})->name('admin');

Route::get('/voir--agenda', function () {
    // Récupérer tous les événements
$evenements = Event::all();

// Passer les événements à la vue admin
return view('voir', compact('evenements'));
})->name('voir');



require __DIR__.'/auth.php';
