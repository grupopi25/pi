<?php

use App\Http\Controllers\AdiminController;
use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUser\PetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
// clints
Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/sobre',[HomeController::class,'sobre'])->name('sobre');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/consulta',[HomeController::class,'consulta'])->name('consulta');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');


// register users
Route::get('/cadastro',[CadastroUserController::class,'index'])->name('cadastro');
Route::post('/store-user',[CadastroUserController::class,'store'])->name('store-user');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/auth',[LoginController::class,'authenticate'])->name('user-login');
Route::post('/logout',[LoginController::class,'logout'])->name('user-logout');

// adm
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[AdiminController::class,'dashboard'])->name('adm.dashboard');
    Route::get('/clients',[AdiminController::class,'clients'])->name('adm.clients');
    Route::get('/pets',[AdiminController::class,'pets'])->name('adm.pets');
    Route::get('/services',[AdiminController::class,'service'])->name('adm.service');
    Route::get('/mensage',[AdiminController::class,'mensage'])->name('adm.mensage');
    Route::get('/doctors',[AdiminController::class,'doctors'])->name('adm.doctors');
    Route::get('/finance',[AdiminController::class,'finance'])->name('adm.finance');
    
 
    Route::get('/admin/pets', [AdiminController::class, 'pets'])->name('adm.pets');
    Route::get('/pets/create', [AdiminController::class, 'createPet'])->name('adm.pets.create');
    Route::post('/pets', [AdiminController::class, 'storePet'])->name('adm.pets.store');
});


   // para pets

Route::middleware(['auth'])->group(function() {

    Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
    Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');
    Route::post('/pets/store', [PetController::class, 'store'])->name('pets.store');
    Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
    Route::put('/pets/{pet}', [PetController::class, 'update'])->name('pets.update');
    Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');

});





