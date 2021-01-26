<?php

namespace App\Models\Admin;
use DB;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public function atualizar($request){

        $dataAtual = date('Y-m-d');
        $dataCompleta = date('Y-m-d H:i:s', time());
        $var = array();
        $valorAtualPasa = 0;
        $valorExtrato = 0;

        $valorAtualCoin = 0;
        $valorExtratoCoin = 0;

        $tipoTransacao = "";

        if($request->data_pasanaku == ""){
            $request->data_pasanaku = date('Y-m-d');
        }

        if($request->data_coin == ""){
            $request->data_coin = date('Y-m-d');
        }

        $request->valor_pasanaku = realToFloat($request->valor_pasanaku);
        $request->valor_coin = realToFloat($request->valor_coin);

       
        $valoresUsuario = array(
            'name' => $request->nome,
            'email' => $request->email,
            'cep' => $request->cep,
            'bairro' => $request->bairro,
            'rg' => $request->rg,
            'mae' => $request->mae,
            'conjugue' => $request->conjugue,
            'logradouro' => $request->logradouro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'numero' => $request->numero,
            'facebook' => $request->facebook,
            'dependente' => $request->dependente,
            'banco' => $request->banco,
            'conta' => $request->conta,
            'agencia' => $request->agencia,
            'tipodeconta' => $request->tipodeconta,
            'observacoes' => $request->observacoes,
            'cpf' => preg_replace("/[^0-9]/", "", $request->cpf),
        );


        
        /* UPDATE PASANAKU */

        $selectExtrato = DB::table('saldos')
        ->where('id_user', $request->id)
        ->orderBy('id', 'DESC')
        ->take(1)
        ->get();      

        foreach($selectExtrato as $extrato){
            $valorAtualPasa =  $extrato->valor;            
        }

        if($valorAtualPasa < $request->valor_pasanaku){
            $valorExtrato = $valorAtualPasa - $request->valor_pasanaku; 
            $tipoTransacao = "deposito";
            $valorExtrato = abs($valorExtrato);

        }elseif($valorAtualPasa > $request->valor_pasanaku){
            $valorExtrato =  $request->valor_pasanaku - $valorAtualPasa;
            $tipoTransacao = "resgate";
            $valorExtrato = abs($valorExtrato);
        }
    
        $dadosPasa = array(
            'id_user' => $request->id,
            'valor' => $valorExtrato,
            'tipo' => $tipoTransacao,
            'data_agendada' => $request->data_pasanaku,
            'pagamento_feito' =>true,
            'data_efetuada' => $request->data_pasanaku,
            'created_at' => $dataCompleta,
            'updated_at' => $dataCompleta,  
          );

          $valoresPasa = array(
            'id_user' => $request->id,
            'valor' => $request->valor_pasanaku,
            'data_efetuada' => $request->data_pasanaku, 
            'updated_at' => $dataCompleta,
            'created_at' => $dataCompleta
        );

        if($valorExtrato > 0){
        DB::table('saldos')->insert($valoresPasa);
        DB::table('transacoes')->insert($dadosPasa);
        }




        /* UPDATE SMART */
        
        $selectExtratoSmart = DB::table('smart_saldos')
        ->where('id_user', $request->id)
        ->orderBy('id', 'DESC')
        ->take(1)
        ->get();      

        foreach($selectExtratoSmart as $extratoCoin){
            $valorAtualCoin =  $extratoCoin->valor;            
        }

        

        if($valorAtualCoin < $request->valor_coin){
            $valorExtratoCoin = $valorAtualCoin - $request->valor_coin; 
            $tipoTransacao = "deposito";
            $valorExtratoCoin = abs($valorExtratoCoin);

        }elseif($valorAtualCoin > $request->valor_coin){
            $valorExtratoCoin =  $request->valor_coin - $valorAtualCoin;
            $tipoTransacao = "resgate";
            $valorExtratoCoin = abs($valorExtratoCoin);
        }
    
        $dadosCoin = array(
            'id_user' => $request->id,
            'valor' => $valorExtratoCoin,
            'tipo' => $tipoTransacao,
            'data_agendada' => $request->data_coin,
            'pagamento_feito' =>true,
            'data_efetuada' => $request->data_coin,
            'created_at' => $dataCompleta,
            'updated_at' => $dataCompleta,  
          );

          $valoresCoin = array(
              'id_user' => $request->id,
            'valor' => $request->valor_coin,
            'data_efetuada' => $request->data_coin, 
            'updated_at' => $dataCompleta,
            'created_at' => $dataCompleta
        );

        if($valorExtratoCoin > 0){
            DB::table('smart_saldos')->insert($valoresCoin);
            DB::table('smart_transacoes')->insert($dadosCoin);
        }
       
        DB::table('users')
        ->where('id', $request->id)
        ->update($valoresUsuario);    
    
     
       }

    public function editar($id){

        $this->date = date('Y-m-d H:i:s', time());

        $selectDados = DB::table('users as u')
        ->select('u.id as id' ,'u.cpf', 'u.rg', 'u.cep','u.bairro', 'u.conjugue', 'u.logradouro', 'u.numero',
        'u.estado','u.cidade','u.facebook', 'u.mae', 'u.email', 'u.celular','u.data_nascimento', 'u.celular','u.name',
        'u.dependente',
'u.banco',
'u.conta',
'u.agencia',
'u.tipodeconta',
'u.observacoes',
            's.valor as pasa_valor','c.valor as coin_valor')
            ->leftjoin('saldos as s', function ($joinSaldo) {
                $joinSaldo->on( 'u.id', '=', 's.id_user')
                ->where('s.data_efetuada','>',  $this->date);
            })      
            ->leftjoin('smart_saldos as c', function ($joinSmartSaldo) {
                $joinSmartSaldo->on( 'c.id', '=', 'c.id_user')  
                ->where('c.data_efetuada','>',  $this->date);            
            })       
        ->where('u.id', $id)                
        ->distinct()
        ->take(1)
        ->get();

        $selectCoin = DB::table('smart_saldos')
        ->select('valor')  
        ->where('id_user', $id)        
        ->orderBy('id', 'desc')
        ->take(1)
        ->get();
        



        $selectPasa = DB::table('saldos')
            ->select('valor')      
            ->where('id_user', $id)
            ->orderBy('id', 'DESC')
            ->take(1)
        ->get();

      

        $emptyCoin = $selectCoin->isEmpty();
        $emptyPasa = $selectPasa->isEmpty();

        if($emptyCoin == true){
            $coinValor = 0;
        }else{
            foreach($selectCoin as $coin){
                $coinValor = $coin->valor;        
            }
        }
       
        if($emptyPasa == true){
            $pasaValor = 0;
        }else{
            foreach($selectPasa as $pasa){
                $pasaValor = $pasa->valor;
            }
        }

     

        foreach($selectDados as $dados){
            
            /* VERIFICA SE ESTÀ ZERADA A CONTA */
            if($coinValor == ""){
                $coinValor = 0;
            }
            if($pasaValor == ""){
                $pasaValor = 0;
            }

            /* VERIFICA SE NÂO EXISTE INSERT */
            if($emptyCoin  == false){ 
                //dd($dados->coin_valor)    ;           
                $dados->coin_valor = number_format($coinValor, 2,',','.');                
            }else{
                $dados->coin_valor = 0;
            }

            if($emptyPasa  == false){
                    $dados->pasa_valor = number_format($pasaValor, 2,',','.');                                
            }else{
                $dados->pasa_valor = 0;
            }
     
     
            
        }


        return($selectDados);        
    }


    public function index()
    {
        $select = DB::table('users')
        ->select('name', 'email', 'cpf', 'data_nascimento', 'celular', 'id')
        ->get();

        foreach ($select as $sel){
          

            if(($sel->data_nascimento == "0000-00-00") or ($sel->data_nascimento == "")){
                $sel->data_nascimento = null;
            }else{
                $sel->data_nascimento = date('d/m/Y', strtotime($sel->data_nascimento));    
            }

           
        }

        return($select);
    }
}
