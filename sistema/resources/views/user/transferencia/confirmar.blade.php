@extends('user.headercliente')

@section('main') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <div class="col-md-6 col-md-offset-3 col-sm-12">
        <div class="box">
            <div class="header-box">
              <h3 class="center">CONFIRMAR TRANSFERÊNCIA</h3>
            </div>
            <div class="body-box">
         
              <form action="{{Route('usuario.transfer.confirmed')}}" method="post">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <table class="table table-hover">
                        <tr>
                            <td>Tipo de Conta</td>
                            <td>{{$tipo_conta}}</td>
                        </tr>
                        <tr>
                            <td>Valor</td>
                            <td class="dinheiro_mascara">{{$valor}}</td>
                        </tr>
                        <tr>
                            <td>Transferir para</td>
                            <td>{{$nome}}</td>
                        </tr>
                        <tr>
                            <td>CPF/CNPJ</td>
                            <td class="cpf_mascara">{{$cpf}}</td>
                        </tr>
                    </table>                                                                                       
                    </div>
                    </div>
          </div>

        <div class="box-footer">
        <div class="col-xs-6">
            <a href="{{Route('usuario.transfer')}}">
                <div class="btn btn-danger">CANCELAR</div>
            </a>        
        </div>
        <div class="col-xs-6">
            <input type="submit" value="CONFIRMAR" class="btn btn-success">
        </div>
        
            
        </div>
                <input type="hidden" name="id" value="auth()->user()->id">
                <input type="hidden" name="tipo_conta" value="{{$tipo_conta}}">
                <input type="hidden" name="valor" value="{{$valor}}">                
                <input type="hidden" name="cpf" value="{{$cpf}}">              
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

              </form>
     
            </div>
              



            
        </div>  
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection