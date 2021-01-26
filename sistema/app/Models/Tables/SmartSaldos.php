<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use DB;

class SmartSaldos extends Model
{
    protected $table = 'smart_saldos';

    public function transferRemoveValue($value, $id_user, $id_transfer){
        $data = date('Y-m-d H:i:s', time());
        $oldBalanceValue = 0;

        $previousBalances = DB::table($this->table)
                            ->where('id_user', '=',$id_user)
                            ->orderBy('id', 'desc')
                            ->take(1)                            
                            ->get();
        
        foreach($previousBalances as $previousBalance){
            $oldBalanceValue = floatTwoDecimals($previousBalance->valor);
        }
        $newBalance = $oldBalanceValue - $value;
        
       
        DB::table($this->table)->insert([
            'id_user' => $id_user,
                'valor' => $newBalance,
                'data_efetuada' => $data, 
                'updated_at' => $data,
                'created_at' => $data,  
        ]);

        /* TRANSACOES/ DEPOSITO */
        $dados = array(
            'id_user' => $id_user,
            'valor' => $value,
            'tipo' => 'resgate_transfer',
            'data_agendada' => $data,
            'pagamento_feito' =>true,
            'data_efetuada' => $data,
            'created_at' => $data,
            'updated_at' => $data,  
            'id_transfer_user' => $id_transfer, 
          );
  
          DB::table('smart_transacoes')->insert($dados);         
        /* FIM TRANSACOES */

        return(true);
        
    }

    public function transferAddValue($value, $id_user, $id_transfer){
        $data = date('Y-m-d H:i:s', time());
        $oldBalanceValue = 0;

        $previousBalances = DB::table($this->table)
                            ->where('id_user', '=',$id_user)
                            ->orderBy('id', 'desc')
                            ->take(1)                            
                            ->get();
        
        foreach($previousBalances as $previousBalance){
            $oldBalanceValue = floatTwoDecimals($previousBalance->valor);
        }
        $newBalance = $oldBalanceValue + $value;
        
       
        DB::table($this->table)->insert([
            'id_user' => $id_user,
                'valor' => $newBalance,
                'data_efetuada' => $data, 
                'updated_at' => $data,
                'created_at' => $data,  
        ]);

        /* TRANSACOES/ DEPOSITO */
        $dados = array(
            'id_user' => $id_user,
            'valor' => $value,
            'tipo' => 'deposito_transfer',
            'data_agendada' => $data,
            'pagamento_feito' =>true,
            'data_efetuada' => $data,
            'created_at' => $data,
            'updated_at' => $data,
            'id_transfer_user' => $id_transfer, 
          );
  
          DB::table('smart_transacoes')->insert($dados);
          

        /* FIM TRANSACOES */

        return(true);
    }
}
