<?php

namespace App\Http\Controllers\User\Contas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\Saldo;

class saldoController extends Controller
{
    public function index()
    {
        $saldo = new saldo();
        $saldo = $saldo->index();
        $dados = array('dados' => $saldo);
        
        return view('user.pasanaku.saldo')->with($dados);
        
    }
}
