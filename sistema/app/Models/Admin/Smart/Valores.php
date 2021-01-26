<?php

namespace App\Models\Admin\Smart;

use Illuminate\Database\Eloquent\Model;
use DB;

class Valores extends Model
{
    public function salvar($request){
        $data = $request->data;
        $valor = realToFloat($request->valor);     
        $dataCompleta = date('Y-m-d H:i:s', time());
        $dados = array(
            'data' => $data,
            'valor' => $valor,
            'created_at' => $dataCompleta,
            'updated_at' => $dataCompleta,
        );
        DB::table('valores_smartcoin')
        ->insert($dados);
    }

    public function index(){
        $valores = DB::table('valores_smartcoin')
        ->get();

        foreach($valores as $item){
            $item->data = date('d-m-Y', strtotime($item->data));
            $item->valor = number_format($item->valor, 2, ',', '.'); 
        }

        return($valores);
    }
}
