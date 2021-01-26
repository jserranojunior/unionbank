<?php

namespace App\Http\Controllers\User\Contas;
use App\Models\User\Extrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class extratoController extends Controller
{
    public function index(){
        $dados = new Extrato();
        $dados = $dados->index();
        return view('user.pasanaku.extrato')->with($dados);
    }
}
