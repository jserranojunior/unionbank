<?php

namespace App\Models\Admin;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Saldo;

class Operacoes extends Model
{ 
    public function excluir($id){
        DB::table('transacoes')
        ->where('id', $id)
        ->take(1)
        ->delete();
    }


    public function emitir($request)
    {   
        $saldo = new saldo();
        $saldo = $saldo->create($request);       

        $id = $request->id;
        $dataAtual = date('Y-m-d H:i:s', time());

        $dataCompleta = date('Y-m-d H:i:s', time());

        $id_admin =  auth()->guard('admin')->user()->id;  
        
        $dados = array('id_admin' => $id_admin, 'pagamento_feito' => 1, 'data_efetuada' => $dataAtual, 'updated_at' => $dataCompleta);

        DB::table('transacoes')
        ->take(1)
        ->where('id', $id)
        ->update($dados);       
    }

    public function index(){

        $select = DB::table('transacoes as T')
        ->join('users as U','T.id_user','=', 'U.id')
        ->select('T.id as id', 'T.id_user', 'valor', 'data_agendada','pagamento_feito', 'tipo', 'name')
        ->where('pagamento_feito', false)
        ->get();
        

        foreach($select as $item){
            $item->valor = number_format($item->valor, 2, ',','.');
            $item->data_agendada = date('d/m/Y', strtotime($item->data_agendada));
        }        
            return($select);
    }

    public function edit($id){
        $select = DB::table('transacoes as T')
        ->join('users as U','T.id_user','=', 'U.id')
        ->select('T.id as id', 'T.id_user', 'valor', 'data_agendada','pagamento_feito', 'tipo', 'name')
        
        ->where('pagamento_feito', false)
        ->where('T.id', $id)
        ->get();

        foreach($select as $item){
            $item->valor = number_format($item->valor, 2, ',','.');
            $item->data_agendada = date('Y-m-d H:i:s', strtotime($item->data_agendada));
        }        
            return($select);
    }



}
