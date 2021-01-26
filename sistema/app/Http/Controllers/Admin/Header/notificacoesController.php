<?php

namespace App\Http\Controllers\Admin\Header;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class notificacoesController extends Controller
{
    public function notification(){
        $notificacao = DB::table('transacoes')
                ->where('pagamento_feito', false)
                ->count();


        
        $dados = array('notification' => $notificacao);       
        
        
        return($dados);        
    }
}
