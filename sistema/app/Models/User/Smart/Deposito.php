<?php

namespace App\Models\User\Smart;
use DB;
use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    public function index()
    {
        $dados = array("valor" => 17);
        return($dados);
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
          'tipo' => 'deposito',
          'data_agendada' => $request->data,
          'tipodeposito' => $request->tipodeposito,
          'localdeposito' => $request->localdeposito,
          'pagamento_feito' =>false,
          'data_efetuada' => $dataCompleta,
          'created_at' => $dataCompleta,
          'updated_at' => $dataCompleta,  
        );

        DB::table('smart_transacoes')->insert($dados);

    }
}
