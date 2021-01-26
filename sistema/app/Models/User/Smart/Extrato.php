<?php

namespace App\Models\User\Smart;
use DB;
use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    public function index(){

        $id = auth()->user()->id;        
        $select = DB::table('smart_transacoes')
        ->select('valor', 'data_efetuada', 'tipo')
        ->where('id_user', $id)
        ->orderBy('id', 'desc')
        ->Where('pagamento_feito', true)
        ->get();       

        $total = 0;
        foreach($select as $dados){
            /* FAZENDO SOMA DE VALORES PARA O TOTAL */
            $valor = $dados->valor;
            $tipo = $dados->tipo;

            if($dados->tipo == "deposito" or $dados->tipo == "deposito_transfer"){
            $total += $valor;
            $dados->tipo = "+";
        }elseif($dados->tipo == "resgate" or $dados->tipo == "resgate_transfer"){
                $total -= $valor;
                $dados->tipo = "-";
                }
               
            /* MUDANDO FORMATO DA DATA */
            $dados->data_efetuada = date('d/m/Y', strtotime($dados->data_efetuada));
        }

        $total = number_format($total, 2,',','.');


        $dados = ['dados' =>  $select, 'total' => $total];
        return($dados);
    }
}
