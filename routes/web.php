<?php

use App\Http\Controllers\Admin\{
    CpuController,
    monitorController,
    mouseController,
    tecladoController,
    foneController,
    webcamController,
    estabilizadorController,
    impressoraController,
    multimetroController,
    nobreakController,
    notebookController,
    roteadorController,
    servidorController,
    switchController,
    telefoneController,
    userController,
    usuarioController,
    DashboardController
};
// Controller de historico
use App\Http\Controllers\Historico\historicoController;
// Controles do unidade setor
use App\Http\Controllers\unidadesetor\UnidadesetorController;


// autenticação
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\pdf\PdfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth'])->group(function() {

    // Rotas dos equipamentos

    Route::any('cpu/consulta',[CpuController::class,'search'])->name('cpu.buscar');
    Route::resource('semdec/cpu', CpuController::class);

    Route::any('monitor/consulta',[monitorController::class,'search'])->name('monitor.buscar');
    Route::resource('semdec/monitor', monitorController::class);

    Route::any('mouse/consulta',[mouseController::class,'search'])->name('mouse.buscar');
    Route::resource('semdec/mouse', mouseController::class);

    Route::any('teclado/consulta',[tecladoController::class,'search'])->name('teclado.buscar');
    Route::resource('semdec/teclado', tecladoController::class);

    Route::any('fone/consulta',[foneController::class,'search'])->name('fone.buscar');
    Route::resource('semdec/fone', foneController::class);

    Route::any('webcam/consulta',[webcamController::class,'search'])->name('webcam.buscar');
    Route::resource('semdec/webcam', webcamController::class);

    Route::any('estabilizador/consulta',[estabilizadorController::class,'search'])->name('estabilizador.buscar');
    Route::resource('semdec/estabilizador', estabilizadorController::class);

    Route::any('impressora/consulta',[impressoraController::class,'search'])->name('impressora.buscar');
    Route::resource('semdec/impressora', impressoraController::class);

    Route::any('multimetro/consulta',[multimetroController::class,'search'])->name('multimetro.buscar');
    Route::resource('semdec/multimetro', multimetroController::class);

    Route::any('nobreak/consulta',[nobreakController::class,'search'])->name('nobreak.buscar');
    Route::resource('semdec/nobreak', nobreakController::class);

    Route::any('notebook/consulta',[notebookController::class,'search'])->name('notebook.buscar');
    Route::resource('semdec/notebook', notebookController::class);

    Route::any('roteador/consulta',[roteadorController::class,'search'])->name('roteador.buscar');
    Route::resource('semdec/roteador', roteadorController::class);

    Route::any('servidor/consulta',[servidorController::class,'search'])->name('servidor.buscar');
    Route::resource('semdec/servidor', servidorController::class);

    Route::any('switch/consulta',[switchController::class,'search'])->name('switch.buscar');
    Route::resource('semdec/switch', switchController::class);

    Route::any('telefone/consulta',[telefoneController::class,'search'])->name('telefone.buscar');
    Route::resource('semdec/telefone', telefoneController::class);

    Route::any('user/consulta',[userController::class,'search'])->name('user.buscar');
    Route::resource('semdec/user', userController::class);

    Route::any('usuario/consulta',[usuarioController::class,'search'])->name('usuario.buscar');
    Route::resource('semdec/usuario', usuarioController::class);


    Route::get('semdec/Dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::any('acesso/consulta',[usuarioController::class,'search'])->name('usuario.buscar');
    Route::resource('semdec/acesso', userController::class);


    // historico para equipamento , usuarios,user
    Route::any('historico/consulta/equipamento',[historicoController::class,'searchequipamento'])->name('historico.buscar');
    Route::get('semdec/historico/equipamento',[ historicoController::class,'indexequipamento'])->name('index.historico');


    Route::any('historico/consulta/usuario',[historicoController::class,'searchusuario'])->name('historicousuario.buscar');
    Route::get('semdec/historico/usuario',[ historicoController::class,'usuario'])->name('indexusuario.historico');

// rotas de seetor e unidade
    Route::resource('semdec/unidadesetor', UnidadesetorController::class);

});
// Rotas dos equipamentos

// rotas do PDF
Route::prefix('Equipamento')->middleware('auth')->group(function(){

    route::get('/cpu/pdf',[PdfController::class,'cpu'])->name('cpu.pdf');
    route::get('/monitor/pdf',[PdfController::class,'monitor'])->name('monitor.pdf');
    route::get('/mouse/pdf',[PdfController::class,'mouse'])->name('mouse.pdf');
    route::get('/teclado/pdf',[PdfController::class,'teclado'])->name('teclado.pdf');
    route::get('/fone/pdf',[PdfController::class,'fone'])->name('fone.pdf');
    route::get('/webcam/pdf',[PdfController::class,'webcam'])->name('webcam.pdf');
    route::get('/estabilizador/pdf',[PdfController::class,'estabilizador'])->name('estabilizador.pdf');
    route::get('/usuario/pdf',[PdfController::class,'usuario'])->name('usuario.pdf');
    route::get('/telefone/pdf',[PdfController::class,'telefone'])->name('telefone.pdf');
    route::get('/switch/pdf',[PdfController::class,'switch'])->name('switch.pdf');
    route::get('/roteador/pdf',[PdfController::class,'roteador'])->name('roteador.pdf');
    route::get('/impressora/pdf',[PdfController::class,'impressora'])->name('impressora.pdf');
    route::get('/multimetro/pdf',[PdfController::class,'multimetro'])->name('multimetro.pdf');
    route::get('/notebook/pdf',[PdfController::class,'notebook'])->name('notebook.pdf');
    route::get('/nobreak/pdf',[PdfController::class,'nobreak'])->name('nobreak.pdf');
    route::get('/servidor/pdf',[PdfController::class,'servidor'])->name('servidor.pdf');

});





// rotas de acesso ao sistema
Auth::routes();
Route::post('/sair', [LogoutController::class, 'logout'])->name('sair');

Route::fallback(function(){
    return redirect()->route('login');
});

