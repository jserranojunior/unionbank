@extends('user.headercliente')

@section('main') 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <div class="col-md-6 col-md-offset-3 col-sm-12">
        <div class="box">
            <div class="header-box">
              <h3 class="center">TRANSFERÊNCIA</h3>
            </div>
            
            @if(isset($dadosError))
              
                <p class="bg-warning text-center">
                  {{$dadosError['message']}}
                </p>
             
            @endif   
            
            <div class="body-box">
              <form action="{{Route('usuario.transfer.confirmation')}}" method="post">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <label for="tipo_conta">ESCOLHA A CONTA</label>
                        <select name="tipo_conta" id="" class="form-control">
                          <option value="pasanaku">Pasanaku</option>
                          <option value="smart">Smart</option>
                        </select>
                        <div class="form-group">
                          <label for='valor'>VALOR TRANSFERÊNCIA</label>
                        <input type="text" name="valor" class="dinheiro_mascara form-control">                
                        </div>
                      <div class="form-group">
                      <label for='valor'>CONTA PARA TRANSFERÊNCIA (CPF/CNPJ)</label>
                        <input type="text" name="cpf" class="cpf_mascara form-control">              
                      </div>
                      <input type="hidden" name="id" value="auth()->user()->image">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                      <input type="submit" value="TRANSFÊRIR" class="btn btn-primary">
                      </div>               
                    </div>
              </form>
            </div>

            </div>
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