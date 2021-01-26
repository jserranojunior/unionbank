<?php

namespace App\Http\Controllers\Admin\PortalSaude;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Header\notificacoesController;
use App\Models\Tables\UsersPortalSaude;
use App\Models\Tables\User;


class portalSaudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersPortalSaude = new UsersPortalSaude();
        $usersPortalSaude = $usersPortalSaude->get();

        foreach($usersPortalSaude as $dadosUsers){            
            $this->Users = new User();
            $this->Users = $this->Users->where('id', '=', $dadosUsers->id_user)->get();
         
            foreach($this->Users as $user){
                $dadosUsers->nome = $user->name;
                $dadosUsers->celular = $user->celular;
                $dadosUsers->email = $user->email;
            }
            
        }

        $notificacao = new notificacoesController();
        $notificacao = $notificacao->notification();   
        $dados = array('dados' => $usersPortalSaude, 'notificacoes' =>  $notificacao);
        return view('admin.portalsaude.index')->with($dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {      
       
            $usersPortalSaude = new UsersPortalSaude();
            $usersPortalSaude = $usersPortalSaude->create($request->all());
            $usersPortalSaude->save(); 
            
            
            return redirect('/cliente');
            
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
