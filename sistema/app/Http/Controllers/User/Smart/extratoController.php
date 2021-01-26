<?php

namespace App\Http\Controllers\User\Smart;
use App\Models\User\Smart\Extrato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class extratoController extends Controller
{
    public function index(){
        $dados = new Extrato();
        $dados = $dados->index();
        return view('user.smart.extrato')->with($dados);
    }
}
