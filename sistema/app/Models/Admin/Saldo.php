<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Saldo extends Model
{
    public function create($request){

        $id_conta = $request->id;

        $transacoes = DB::table('transacoes')
        ->take(1)
        ->where('id', $id_conta)
        ->get();

        foreach($transacoes as $item){
            $valor = $item->valor;
            $id_user = $item->id_user;
            $tipo_transacao = $item->tipo;
        }

        $saldos = DB::table('saldos')
        ->select('valor')
        ->where('id_user', $id_user)
        ->take(1)
        ->orderBy('id', 'desc')
        ->get();

        $saldo = 0;

        foreach($saldos as $item){
            $saldo = $item->valor;
        }              
        
        if($tipo_transacao == "deposito"){
            $novo_valor_saldo = $saldo + $valor;
        }elseif($tipo_transacao == "resgate"){
            $novo_valor_saldo = $saldo - $valor;    
        }

        $novo_valor_saldo = number_format( $novo_valor_saldo, 2, '.','');
        
       
        $dataAtual = date('Y-m-d H:i:s', time());
        $dataCompleta = date('Y-m-d H:i:s', time());

        $valores = array(
            'id_user' => $id_user,
            'valor' => $novo_valor_saldo,
            'data_efetuada' => $dataAtual, 
            'updated_at' => $dataCompleta,
            'created_at' => $dataCompleta
        );

       DB::table('saldos')->insert($valores);
    }
}
