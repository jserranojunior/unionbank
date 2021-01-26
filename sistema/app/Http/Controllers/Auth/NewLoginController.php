<?php

namespace App\Http\Controllers\Auth;
use App\Models\Tables\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Emails\emailCadastroController;

class NewLoginController extends Controller    
{
    public function __construct(User $Users){
        $this->Users = $Users;
    }

    public function login(Request $data){
 
        // $data->password = bcrypt($data->password);

        // $Usuario = self::all();
        $Users = $this->Users
        ->where('email', $data->email)
        ->take(1)
        ->get();

        if($Users->isNotEmpty()){
            foreach($Users as $User){
                if (Hash::check($data->password, $User->password)) {
                    return response()->json([
                        'message' => 'logado',  
                        'data' => $Users,              
                    ]);

                }else{
                    return response()->json([
                        'message' => 'Senha Incorreta',  
                        'data' => '',              
                    ]);
                   
                }               
               }
        }else{
            return response()->json([
                'message' => 'Email não cadastrado',  
                'data' => '',              
            ]);
           
        }
       
        

    }
}
