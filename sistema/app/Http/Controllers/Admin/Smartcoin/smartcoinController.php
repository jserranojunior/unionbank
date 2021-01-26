<?php

namespace App\Http\Controllers\Admin\Smartcoin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Header\notificacoesController;
use App\Models\Admin\Smart\Valores;

class smartcoinController extends Controller
{
    public function index()
    {
        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();  
        $valores = new valores();
        $valores = $valores->index();


        $dados = array('notificacoes' =>  $notificacao,'dados' => $valores);

        return view('admin.smartcoin.listagemvalores')->with($dados);
    }

    public function create()
    {
        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();  

        $dados = array('notificacoes' =>  $notificacao);

        return view('admin.smartcoin.adicionarvalor')->with($dados);
    }

    public function store(Request $request){
        $valores = new valores();
        $salvar = $valores->salvar($request);

        return redirect()->route('admin.smart.index');
    }

    public function editar(Request $request)
    {
        dd($request->id);
    }
}
