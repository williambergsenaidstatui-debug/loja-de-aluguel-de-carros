<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});

// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');





// Outras páginas

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/reserva', function () {
    return view('reserva');
})->name('reserva');

// Processar formulário de reserva
Route::post('/enviar-reserva', function (Illuminate\Http\Request $request) {
    // Validar e processar os dados da reserva
    return redirect('/reserva')->with('success', 'Reserva enviada com sucesso!');
})->name('enviar.reserva');

Route::get('/deleta_carro/{id_carro}',[TestController::class,'deleta_carro']);
Route::get('/alterar_carro/{id_carro}',[Testcontroller::class,'mostra_carro']);
Route::get('/alterarformulario/{id_carro}',[TestController::class,'vercarro']);
Route::get('/frota',[Testcontroller::class,'conta_marca']);
Route::get('/formulario',[Testcontroller::class,'abrir_form']);
Route::get('/frota',[Testcontroller::class,'conta_marca']);










Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
