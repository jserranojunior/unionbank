<?php

namespace App\Http\Controllers\Admin\Analise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Analise;
use App\Http\Controllers\Admin\Header\notificacoesController;

class analiseController extends Controller
{
    public function index(){

        $dados = new Analise();
        $dados = $dados->index();

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();    
        $count = 1;

        $dados = array('dados' => $dados, 'count' => $count, 'notificacoes' =>  $notificacao);

        return view('admin.analise.listagem')->with($dados);
    }
}
