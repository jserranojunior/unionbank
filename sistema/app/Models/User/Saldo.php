<?php

namespace App\Models\User;
use DB;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    public function index(){

        $id = auth()->user()->id;          
        
        $saldo = DB::table('saldos')
        ->where('id_user', $id)
        ->take(1)
        ->orderBy('id', 'desc')
        ->get();

        $valor = array('valor' => "0,00");
        $existe_saldo = false;

        foreach($saldo as $item){
         
            if($item->valor == ""){
                $item->valor = 0;            
            }
            if($item->valor > 0){
                $valor = number_format($item->valor, 2, ',', '.');
            }else{
                $valor = 0;
            }           

            $valor = array('valor' => $valor);
            $existe_saldo = true;                         
        }

        if($existe_saldo){
            $saldo = $valor;
        }else{
            $saldo = $valor;
        }
         
     return($saldo);        
    }

    
}
