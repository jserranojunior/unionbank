<?php

namespace App\Http\Controllers\Admin\Operacoes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Operacoes;
use App\Http\Controllers\Admin\Header\notificacoesController;

class operacoesController extends Controller
{
    public function emitir(Request $request){

       
        $operacoes = new Operacoes();
        $operacoes = $operacoes->emitir($request);

        return redirect('/admin/operacoes');  
    }

    public function excluir(Request $request){
        $operacoes = new Operacoes();
        $operacoes = $operacoes->excluir($request->id);

        return redirect('/admin/operacoes');  
    }


    public function index(){

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();    

        $operacoes = new Operacoes();
        $operacoes = $operacoes->index();
        $count = 1;
        $dados = array('dados' => $operacoes,'count' => $count, 'notificacoes' =>  $notificacao);

        return view('admin.operacoes.listagem')->with($dados);       
     
    }

    public function edit($id)
    {
        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification(); 

        $operacoes = new Operacoes();
        $operacoes = $operacoes->edit($id);

        $dados = array('dados' => $operacoes, 'notificacoes' =>  $notificacao);
        

        return view("admin.operacoes.editar")->with($dados);
    }

    
}
