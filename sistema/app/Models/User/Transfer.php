<?php

namespace App\Models\User;
use App\Models\Tables\User;
use App\Models\Tables\Saldos;
use App\Models\Tables\SmartSaldos;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Transfer extends Model
{
    public function __construct(User $users, Saldos $saldos, SmartSaldos $smart_saldos){        
        $this->users = $users;
        $this->saldos = $saldos;
        $this->smart_saldos = $smart_saldos;
    }

    public function validation($request){
        $cpf = $request->cpf;
        $valor = $request->valor;
        $tipo_conta = $request->tipo_conta;
        $id = auth()->user()->id;
        $dadosError = array();
        $dadosError = false;
       

        $ValueTransfer = realToFloat($request->valor);
        //$ValueTransfer = floatTwoDecimals($ValueTransfer);

        if($tipo_conta == "pasanaku"){
            $selectSaldos = $this->saldos->where('id_user', '=', auth()->user()->id)->orderBy('data_efetuada','desc')->take(1)->get();     
          
            if($selectSaldos->isEmpty()){
                $dadosError['message'] = "Saldo Insuficiente";
                    $dadosError['error'] = "true";
            }

            foreach($selectSaldos as $valorSaldo){

                $valorSaldo->valor = number_format($valorSaldo->valor,'2',',','.');
                $valorSaldo->valor =  realToFloat($valorSaldo->valor);
                $valorSaldo->valor = floatTwoDecimals($valorSaldo->valor);
                                         
                if($ValueTransfer > $valorSaldo->valor or $valorSaldo->valor == 0 or $valorSaldo->valor == null){
                    $dadosError['message'] = "Saldo Pasanaku Insuficiente";
                    $dadosError['error'] = "true";
                   
                }else{
                    $dadosError = array();                    
                    $dadosError = false;     
                                
                }
               
            }                 
        }elseif($tipo_conta == "smart"){
            $selectSaldos = $this->smart_saldos->where('id_user', '=', $id)->orderBy('data_efetuada','desc')->take(1)->get();     
            foreach($selectSaldos as $valorSaldo){               
                
                $valorSaldo->valor = number_format($valorSaldo->valor,'2',',','.');
                $valorSaldo->valor =  realToFloat($valorSaldo->valor);
                $valorSaldo->valor = floatTwoDecimals($valorSaldo->valor);
                
                if($ValueTransfer > $valorSaldo->valor){
                    $dadosError['message'] = "Saldo Smart Insuficiente";
                    $dadosError['error'] = "true";
                }else{
                    $dadosError = array();
                    $dadosError['message'] = "";
                    $dadosError['error'] = false;  
                }   
            }                 
        }

        $request->cpf = preg_replace("/[^0-9]/", "", $request->cpf);
        $users =  $this->users->where('cpf', '=', $request->cpf)->get();
                  
        if($users->isEmpty() == true){  
            $dadosError['message'] = "CPF/CNPJ INVALIDO";
            $dadosError['error'] = "true";
        }  
 
        return($dadosError);
    }

    public function confirmation($request){
        
        $request->cpf  =  preg_replace("/[^0-9]/", "", $request->cpf);
        $users =  $this->users->where('cpf', '=', $request->cpf)->get();
        $request->valor = realToFloat($request->valor);

        $name = null;
        foreach($users as $user){
           $name = $user->name; 
           $id_tranfer = $user->id;
       }
       $dados = array('cpf' => $request->cpf,
                    'valor' => $request->valor,
                    'tipo_conta' => $request->tipo_conta,
                    'nome' => $name,
                );
              
       return($dados);
    }
    public function confirmed($request){

        //dd($request);

        $request->cpf  =  preg_replace("/[^0-9]/", "", $request->cpf);
        $users =  $this->users->where('cpf', '=', $request->cpf)->get();

        $request->valor = number_format($request->valor,'2',',','.');
        $request->valor = realToFloat($request->valor);
        

        $name = null;
        foreach($users as $user){
           $name = $user->name; 
           $id_tranfer = $user->id;
       }
     
        if($request->tipo_conta == "pasanaku"){
            $saldos = $this->saldos->transferRemoveValue($request->valor, auth()->user()->id, $id_tranfer);
            $saldos = $this->saldos->transferaddValue($request->valor, $id_tranfer, auth()->user()->id);        
        }elseif($request->tipo_conta == "smart"){
            //dd("$request->valor, auth()->user()->id, $id_tranfer");
            $saldos = $this->smart_saldos->transferRemoveValue($request->valor, auth()->user()->id, $id_tranfer);
            $saldos = $this->smart_saldos->transferaddValue($request->valor, $id_tranfer, auth()->user()->id);        
        }else{
            dd($request->tipo_conta);
        }
        return(true);
    }
}
