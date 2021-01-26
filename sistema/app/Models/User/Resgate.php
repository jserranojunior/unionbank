<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use DB;

class Resgate extends Model
{
    public function index()
    {
        $id = auth()->user()->id;  
        $dados =  DB::table('saldos')
        ->select('valor')
        ->where('id_user', $id)
        ->take(1)
        ->orderBy('id', 'desc')
        ->get();

        
        $valor = 0;
        $existe_saldo = false;


        foreach($dados as $item){
           $valor = $item->valor;
           $existe_saldo = true;   
        }

        if($existe_saldo){
            $valor = $valor;
        }else{
            $valor = $valor;
        }

        return($valor);
    }

    public function create($request)
    {
                
        $request->valor = realToFloat($request->valor);
                  
        $dataAtual = date('Y-m-d');
        $dataCompleta = date('Y-m-d H:i:s', time());
        $id = auth()->user()->id;  

        $dados = array(
          'id_user' => $id,
          'valor' => $request->valor,
          'tipo' => 'resgate',
          'data_agendada' => $request->data,
          'pagamento_feito' =>false,
          'data_efetuada' => $dataCompleta,
          'created_at' => $dataCompleta,
          'updated_at' => $dataCompleta,  
        );

        DB::table('transacoes')->insert($dados);

    }
}
