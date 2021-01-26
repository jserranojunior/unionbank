<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class bonusPasanaku extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bonusPasanaku:emitir';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Emite o pagamento de 1%';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       
        $data = date('Y-m-d H:i:s', time());
        DB::table('bonus_pasanaku')->insert(
            ['created_at' => $data]
        );
        

        $select_id_bonus = DB::table('bonus_pasanaku')
                    ->select('id')
                    ->orderBy('id', 'desc' )
                    ->take(1)
                    ->get();

        foreach($select_id_bonus as $id_bonus){
                $idBonus = $id_bonus->id;
        }
      
       $select_users = DB::table('users')
       ->select('id')
       ->get();
       
       foreach($select_users as $id_users){
        $idUser = $id_users->id;
       

        $select_saldo = DB::table('saldos')
                    ->select('valor')
                    ->where('id_user', $idUser)
                    ->orderBy('id', 'desc' )
                    ->take(1)
                    ->get();

        foreach($select_saldo as $valor_saldo){
            $valorSaldo = $valor_saldo->valor;
            
            $valorPorcentagem = $valorSaldo * 3 / 100;

            $valorPorcentagem = notacaoCientifica($valorPorcentagem);

            $somaValorPorcentagem = $valorSaldo + $valorPorcentagem;

            $somaValorPorcentagem = floatTwoDecimals($somaValorPorcentagem);

            
            $valorPorcentagem = floatTwoDecimals($valorPorcentagem);

            if($somaValorPorcentagem > 0){

            /* TRANSACOES/ DEPOSITO */
            $dados = array(
                'id_user' => $idUser,
                'valor' => $valorPorcentagem,
                'tipo' => 'bonus',
                'data_agendada' => $data,
                'pagamento_feito' =>true,
                'data_efetuada' => $data,
                'created_at' => $data,
                'updated_at' => $data,  
                'id_bonus' => $idBonus,
              );
      
              DB::table('transacoes')->insert($dados);
              

            /* FIM TRANSACOES */

            $valores = array(
                'id_user' => $idUser,
                'valor' => $somaValorPorcentagem,
                'data_efetuada' => $data, 
                'updated_at' => $data,
                'created_at' => $data,  
                'id_bonus' => $idBonus,
            );
    
           DB::table('saldos')->insert($valores);
            }
        }            

       }
       




    }/* fim  */
}
