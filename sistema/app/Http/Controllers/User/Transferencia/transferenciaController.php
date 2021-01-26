<?php

namespace App\Http\Controllers\User\Transferencia;
use App\Models\User\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tables\Saldos;

class transferenciaController extends Controller
{
    public function index(Saldos $saldos){

        return view('user.transferencia.index');
        
    }

    public function confirmation(Request $request, Transfer $transfer, Saldos $saldos){    
        
        $dadosError  = $transfer->validation($request);
        $validation = ['dadosError' => $dadosError];

        //dd($dadosError);

        if($dadosError['error'] == true){
            return view('user.transferencia.index')->with($validation);
        }else{
            $dados = $transfer->confirmation($request);
            return view('user.transferencia.confirmar')->with($dados);
        }
        
        //$saldos = $saldos->transferSendValue("15", 1);
    }

    public function transfer(Request $request, Transfer $transfer){
        $transfer = $transfer->confirmed($request);              
        return view('user.transferencia.finish');
    }
}
