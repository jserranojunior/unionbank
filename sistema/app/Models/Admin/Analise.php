<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;

class Analise extends Model
{
    public function index(){

        $totalDebitos = 0;
        $totalResgate = 0;
        $totalBonus = 0;
        
        $dados = DB::table('transacoes as t')  
        ->select('t.id', 't.valor','t.tipo', 't.data_efetuada','u.name')
        ->leftJoin('users as u', 't.id_user', '=', 'u.id')  
        ->orderBy('t.data_efetuada')       
        ->get();

        foreach($dados as $item){
            

            if($item->tipo == "deposito"){
                $totalDebitos += $item->valor;
            }elseif($item->tipo == "resgate"){
                $totalResgate += $item->valor;
            }elseif($item->tipo == "bonus"){
                $totalBonus += $item->valor;
            }           
                       
        }

        $totalDebitos = valorEmReal($totalDebitos);
        $totalResgate = valorEmReal($totalResgate);
        $totalBonus = valorEmReal($totalBonus);

        foreach($dados as $item){
            $item->valor =  valorEmReal($item->valor); 
           $item->data_efetuada = date('d/m/Y H:i:s', strtotime($item->data_efetuada)); 
        }

        $dadosGerais = array('dados' => $dados,
            'totalDebito' => $totalDebitos, 
            'totalResgate' => $totalResgate, 
            'totalBonus' => $totalBonus,
        );        
        return($dadosGerais);
      
    }
}
