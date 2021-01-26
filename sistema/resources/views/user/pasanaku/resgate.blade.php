@extends('user.headercliente')



@section('main') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
        <div class="box">
            <div class="header-box">
            <h2 class="center">RESGATE</h2>
            </div>
            <div class="body-box">
            <div class="col-md-offset-4 col-md-4">

           <form action="{{url('/resgate/novo')}}" method="post" name="formresgate" id="formresgate" class="form-horizontal">
             
              <div class="form-group ">
                <label for="valor" class="col-sm-6 ">VALOR</label>
                <div class="col-sm-6">  
                  <input type="text" class="form-control dinheiro_mascara" id="valor" name="valor" required>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->


              <div class="form-group">
                <label for="data" class="col-sm-6">DATA</label>
                <div class="col-sm-6">  
                  <input type="date" class="form-control data-automatica" value="{{$dataAtual}}" name="data" required>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->

              <div class="form-group">
                <label for="tipodeposito" class="col-sm-6">TIPO DE RESGATE</label>
                <div class="col-sm-6">  
                  <select class="form-control" name="tipodeposito" >
                    <option value="" selected>DINHEIRO</option>
                 <!--   <option value="">BOLETO</option>
                    <option value="">TRANSFÊRENCIA</option>
                    -->
                  </select>
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->
              <!--
              <div class="form-group">
                <label for="banco" class="col-sm-6">BANCO</label>
                <div class="col-sm-6">  
                    <select class="form-control" name="banco">
                      <option value="" disabled selected>SELECIONE</option>
                      <option value="">BB</option>
                      <option value="">CAIXA E.F.</option>
                      <option value="">ITAU</option>
                      <option value="">BRADESCO</option>
                      <option value="">SMART</option>                
                    </select>
                </div>
              </div>
              -->
              <!-- FECHAMENTO FORM_GROUP -->

              <div class="form-group text-right">
                <div class="col-sm-6 col-sm-offset-6">  
                  <div  type="submit" class="btn btn-primary form-control" onclick="submit();"> RESGATE </div>       
                </div>
              </div><!-- FECHAMENTO FORM_GROUP -->
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" id="valorSaldo" name="valorSaldo" value="{{$valorSaldo}}">            
              
          </form>            
           
                       <script>

                          function moedaParaNumero(valor)
                          {
                              return isNaN(valor) == false ? parseFloat(valor) :   parseFloat(valor.replace("R$","").replace(".","").replace(",","."));
                          }
                          
                            
                                function submit(){
                                  var valorSaldo = document.getElementById("valorSaldo").value;
                                  var valor = document.getElementById("valor").value;
                                  

                                  valorSaldo = moedaParaNumero(valorSaldo);
                                  valor = moedaParaNumero(valor);

                                  var totalResgate = valorSaldo - valor;

                                  
                                  if(totalResgate >= 0){
                                    document.forms['formresgate'].submit();
                                  }else{
                                    alert("Valor menor do que o saldo em conta")
                                  }

                                }
                       </script>

                       <!-- /*
                       alert(valorSaldo + " + " + valor + " = " + totalResgate);


                      alert(valorSaldo); 
                                                   
                   
                */-->

            <!-- DIV PARA CENTRALIZAR -->
        </div>  <!-- END BODY BOX -->
     </div>  <!-- END BOX -->
        
      
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