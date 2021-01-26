<?php

namespace App\Http\Controllers\Admin\Clientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Clientes;
use App\Http\Controllers\Admin\Header\notificacoesController;

class clientesController extends Controller
{

    public function update(Request $request){
        $dados = new Clientes();    
        $dados = $dados->atualizar($request);  
        
        return redirect('/admin/clientes');
    }

    public function edit($id){

        $dados = new Clientes();    
        $dados = $dados->editar($id);

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();    


        $dados = array('dados' => $dados, 'notificacoes' =>  $notificacao);


        return view('admin.clientes.editar')->with($dados);
    }


    public function index()    
    {
        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();

        $dados = new Clientes();    
        $dados = $dados->index();

        $dados = array('dados' => $dados, 'notificacoes' =>  $notificacao);
      
        return view('admin.clientes.listagem')->with($dados);
    }
}
