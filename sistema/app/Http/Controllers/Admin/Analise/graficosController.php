<?php

namespace App\Http\Controllers\Admin\Analise;
use App\Http\Controllers\Admin\Header\notificacoesController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class graficosController extends Controller
{
    public function index(){

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();  

        $dados = array('notificacoes' =>  $notificacao);

        return view('admin.analise.grafico')->with($dados);
    }
}
