<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Header\notificacoesController;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();
        
        $dados = array('notificacoes' =>  $notificacao);

    
        return view('admin.inicio.inicioadm')->with($dados);
    }

    public function logout()
    {       
        auth()->guard('admin')->logout();
        return redirect('/inicio');
    }
   
}
