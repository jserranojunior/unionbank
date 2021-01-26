<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Saldo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $valores = array(
            'id_user' => 5,
            
        );

       DB::table('user_portal_saude')->insert($valores);
            

/*
       DB::table('transacoes')
       ->where('tipo', 'bonus')
       ->delete();
        
        $users = DB::table('users')
            ->select('id')
            ->get();
        foreach($users as $user){
            $id_user = $user->id;             
            
            $transacoes = DB::table('transacoes')
            ->select('valor','tipo')
            ->where('id_user', $id_user)
            ->get();

            $novo_valor_saldo = 0;   
            $saldo = 0; 
            foreach($transacoes as $transacao){               
                
                $tipo_transacao = $transacao->tipo;
                $valor = $transacao->valor;

                if($tipo_transacao == "deposito"){
                    $novo_valor_saldo +=  $valor;
                }elseif($tipo_transacao == "resgate"){
                    $novo_valor_saldo -= $valor;    
                }elseif($tipo_transacao == "bonus"){
                    $novo_valor_saldo +=  $valor;
                }
            }         

            

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
        
*/
  
        // $date = date('Y-m-d h:i:s', time());

        // DB::table('admins')
        //         ->insert([
        //             'name' => 'David Delira',
        //             'email' => 'davidoliveiralira@gmail.com',
        //             'password' => Hash::make('Ma140690@'),
        //             'image' => 'david.jpg',
        //             ]);

        // DB::table('admins')
        //         ->insert([
        //             'name' => 'David Delira',
        //             'email' => 'daviddelira@live.com',
        //             'password' => Hash::make('Jr140690@'),
        //             'image' => 'david.jpg',
        //             ]);

        // DB::table('admins')
        //             ->insert([
        //                 'name' => 'Jorge Serrano Junior',
        //                 'email' => 'jorgeserranojunior@hotmail.com',
        //                 'password' => Hash::make('carro'),
        //                 'image' => 'jorge.jpg',
        //                 ]);
/*
        DB::table('transacoes')
        ->insert([
            'id_user' => 1,
            'valor' => -100.38,
            'tipo' => 'deposito',
            'data_efetuada' => $date,
            'data_agendada' => $date,
            'pagamento_feito' => false,
            'created_at' => $date,
            'updated_at' => $date,
        ]);


/* 
$table->bigInteger('id_admin')->nullable();
            $table->boolean('pagamento_feito');
*/

        // $this->call(UsersTableSeeder::class);
       
        /*
            DB::table('users')
            ->insert([
                'name' => 'Cliente Pasanaku',
                'email' => 'cliente@cliente.com',
                'cpf' => '30968146600',
                'password' => Hash::make('12345'),
                'image' => 'cliente.png',
                ]);

                DB::table('admins')
                ->insert([
                    'name' => 'David Delira',
                    'email' => 'daviddelira@live.com',
                    'password' => Hash::make('Jr140690@'),
                    'image' => 'david.jpg',
                    ]);

                    

                        */
    }
}
