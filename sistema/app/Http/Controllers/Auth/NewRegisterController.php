<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tables\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class NewRegisterController extends Controller
{

    public function __construct(User $Users){
        $this->Users = $Users;
    }
  
        public function create(Request $data)
        {       
            $data = $data->all();                       
            $messages = [
                'email.required' => 'Email está vazio',             
                'email.unique' => 'Já existe esse e-mail cadastrado',
                'password.required' => 'É necessario colocar a senha',
                'name.required' => 'Preencha com o nome completo',
            ];                         
                $validate = Validator::make($data, $this->Users->rules, $messages);
                if($validate->fails()){        
                    $validateError = $validate->errors();
                    return response()->json([
                        'message' => 'Contem erros',  
                        'erros' => $validateError,
                        'data' => '',              
                    ]); 

                    // return response()->json([
                    //     'message' => $validate->errors(),  
                    //     'data' => '',              
                    // ]);
                }else{                    
                        $data['password'] = Hash::make($data['password']);                 
                    try{
                        $this->Users = $this->Users->create($data);                    
                        $this->Users->save();                      
                        return response()->json([
                            'message' => 'Cadastrado',  
                            // 'message' => $data['password'], 
                            'data' => $data,             
                        ]);                        
                    }catch(\Exception $e){
                        return response()->json([
                            'message' =>  $e,  
                            'data' => '',              
                        ]); 
                    }
                }    
        }
    
}
