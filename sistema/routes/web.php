<?php

Route::get('/imagem', function () {return view('inicioimagem');});

Route::get('/', function (){return view('vue.user.layouts.app');});

/* ##### ROTAS DEFAULT ###### */
    Route::get('/logout','Auth\LoginController@logout')->name('logout');    
    Route::any('/abrirconta','Auth\RegisterController@create')->name('abrirconta');    
    Route::get('/inicio', function () {return view('inicio');});
    // Route::get('/', function () {return view('inicio');});
/* ##### FIM ROTAS DEFAULT ###### */

/* ##### ROTAS DE AUTH ###### */
  /* AUTH USER */  
    Route::auth();  
  /* AUTH ADMIN */
    Route::prefix('admin')->group(function() {    
      Route::get('/','Auth\AdminController@index')->name('admin.dashboard');
      Route::get('/login','Auth\AdminLoginController@login')->name('admin.login');
      Route::post('/login','Auth\AdminLoginController@Postlogin')->name('admin.login.submit');
      Route::get('/logout','Auth\AdminController@logout')->name('admin.logout');
      Route::get('/sair','Auth\AdminController@logout')->name('admin.sair');      
    });
/* ##### FIM ROTAS AUTH ###### */

/* ROTAS ADMINISTRADOR */
Route::group(['as' => 'admin.','prefix' => 'admin'],function(){
  
    Route::group(['middleware' => 'web'], function(){  
      /* INICIAL ADMINISTRADOR  */
      // Route::get('/','Auth\AdminController@index')->name('admin.dashboard');

      /* SESSÂO CLIENTES  */
      Route::get('/clientes','Admin\Clientes\clientesController@index')->name('admin.clientes');
      Route::get('/clientes/editar/{id}','Admin\Clientes\clientesController@edit')->name('admin.clientes.edit');
      Route::post('/clientes/atualizar','Admin\Clientes\clientesController@update')->name('clientes.update');


      /* OPERAÇÕES  PASANAKU */
      Route::get('/operacoes', 'Admin\Operacoes\operacoesController@index')->name('admin.operacoes');
      Route::any('/operacoes/editar/{id}', 'Admin\Operacoes\operacoesController@edit')->name('admin.operacoes.edit');
      Route::post('/operacoes/emitir', 'Admin\Operacoes\operacoesController@emitir')->name('admin.operacoes.emitir');
      Route::post('/operacoes/excluir', 'Admin\Operacoes\operacoesController@excluir')->name('admin.operacoes.excluir');
    
      /* PORTAL SAUDE */
      Route::get('/portalsaude', 'Admin\PortalSaude\portalSaudeController@index')->name('admin.portalsaude');
     


    /* OPERACOES SMART */
    Route::get('/operacoes', 'Admin\Operacoes\smartOperacoesController@index')->name('admin.operacoes.smart');
    Route::any('/operacoes/editar/{id}', 'Admin\Operacoes\smartOperacoesController@edit')->name('admin.operacoes.smart.edit');
    Route::post('/operacoes/emitir', 'Admin\Operacoes\smartOperacoesController@emitir')->name('admin.operacoes.smart.emitir');
    Route::post('/operacoes/excluir', 'Admin\Operacoes\smartOperacoesController@excluir')->name('admin.operacoes.smart.excluir');
  
    /* OPERACOES ANALISE */
    Route::get('/analise', 'Admin\Analise\analiseController@index')->name('analise.index');

    /* VALORES SMART */
    Route::get('/smart', 'Admin\Smartcoin\smartcoinController@index')->name('smart.index');
    Route::get('/smart/criar', 'Admin\Smartcoin\smartcoinController@create')->name('smart.create');
    Route::any('/smart/salvar', 'Admin\Smartcoin\smartcoinController@store')->name('smart.store');
 
    Route::any('/smart/editar/{id}', 'Admin\Smartcoin\smartcoinController@editar')->name('smart.editar');
      
    });
  }); 
/* FIM ROTAS ADMINISTRADOR */


/* ROTAS CLIENTES */

Route::group(['as' => 'usuario.', 'middleware' => ['auth:web']],function(){

  Route::post('/portalsaude', 'Admin\PortalSaude\portalSaudeController@create')->name('admin.portalsaude.create');
  
  /* ############## PASANAKU ########## */

  /* EXTRATO */
  Route::get('/extrato', 'User\Contas\extratoController@index'); 
  /* DEPOSITO */
  Route::get('/deposito', 'User\Contas\depositoController@index');
  Route::post('/deposito/novo', 'User\Contas\depositoController@create');
  /* SALDO */  
  Route::get('/saldo', 'User\Contas\saldoController@index');
  /* RESGATE */
  Route::get('/resgate', 'User\Contas\resgateController@index');
  Route::post('/resgate/novo', 'User\Contas\resgateController@create');

   /* ############## FIM PASANAKU ########## */

  /* ############## SMART ########## */
    /* EXTRATO */
    Route::get('/extrato', 'User\Smart\extratoController@index'); 
    /* DEPOSITO */
    Route::get('/deposito', 'User\Smart\depositoController@index');
    Route::post('/deposito/novo', 'User\Smart\depositoController@create');
    /* SALDO */  
    Route::get('/saldo', 'User\Smart\saldoController@index');
    /* RESGATE */
    Route::get('/resgate', 'User\Smart\resgateController@index');
    Route::post('/resgate/novo', 'User\Smart\resgateController@create');
      /* ############## FIM SMART ########## */

    /* TRANSFERENCIAS */
    Route::get('/transferencia','User\Transferencia\transferenciaController@index')->name('transfer');
    Route::post('/transferencia/confirmacao','User\Transferencia\transferenciaController@confirmation')->name('transfer.confirmation'); 
    Route::post('/transferencia/confirmed','User\Transferencia\transferenciaController@transfer')->name('transfer.confirmed'); 

  /* ARRUMAR */
  Route::get('/cliente', function () {return view('iniciocliente');});               
     
  
});
/* FIM ROTAS CLIENTES */










