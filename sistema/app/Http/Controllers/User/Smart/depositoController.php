<?php

namespace App\Http\Controllers\User\Smart;
use App\Models\User\Smart\Deposito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class depositoController extends Controller
{
    public function index()
    {
        $dataAtual = date('Y-m-d');       
        $dados = array('dataAtual' => $dataAtual);        
        return view('user.smart.deposito')->with($dados);
    }

    public function create(Request $request){
        $dados = new Deposito();
        $dados = $dados->create($request);
        return redirect('/deposito');
    }
}
