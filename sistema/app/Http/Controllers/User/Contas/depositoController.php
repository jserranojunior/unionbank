<?php

namespace App\Http\Controllers\User\Contas;
use App\Models\User\Deposito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class depositoController extends Controller
{
    public function index()
    {
        $dataAtual = date('Y-m-d');       
        $dados = array('dataAtual' => $dataAtual);        
        return view('user.pasanaku.deposito')->with($dados);
    }

    public function create(Request $request){
        $dados = new Deposito();
        $dados = $dados->create($request);
        return redirect('/deposito');
    }
}
