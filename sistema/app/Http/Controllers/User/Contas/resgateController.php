<?php

namespace App\Http\Controllers\User\Contas;
use App\Models\User\Resgate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class resgateController extends Controller
{
    public function index()
    {

        $resgate = new Resgate();
        $valor = $resgate->index();

      


        $dataAtual = date('Y-m-d');       
        $dados = array('valorSaldo' => $valor, 'dataAtual' => $dataAtual);        
        return view('user.pasanaku.resgate')->with($dados);
    }

    public function create(Request $request){
        $dados = new Resgate();
        $dados = $dados->create($request);
        return redirect('/resgate');
    }
}
