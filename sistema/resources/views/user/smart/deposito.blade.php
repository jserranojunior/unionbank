@extends('user.headercliente')

@section('main') 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
        <div class="col-lg-offset-2 col-lg-8">
        <div class="box">
            <div class="header-box">
            <h2 class="center">DEPOSITO ELO</h2>
            </div>
            <div class="body-box">
           

           <form action="{{url('/deposito/novo')}}" method="post" class="form-horizontal">
             
              <div class="form-group ">
                <label for="valor" class="col-lg-6 ">ELO VALOR</label>
                <div class="col-lg-6">  
                  <input type="text" class="form-control dinheiro_mascara" name="valor" required>
                </div>
              </div>


              <div class="form-group">
                <label for="data" class="col-lg-6">DATA</label>
                <div class="col-lg-6">  
                  <input type="date" class="form-control data-automatica" value="{{$dataAtual}}" name="data" required>
                </div>
              </div>

              <div class="form-group">
                <label for="tipodeposito" class="col-lg-6">TIPO DE DEPOSITO</label>
                <div class="col-lg-6">  

                  <select class="form-control" required name="tipodeposito" id="tipodeposito">
                    <option value="" selected></option>
                    <option value="DINHEIRO" >DINHEIRO</option>
                    <option value="TRANSFERÊNCIA">TRANSFERÊNCIA</option>
                  </select>               

                  
                </div>
              </div>    

              <div class="form-group">
                <label for="localdeposito" id="labeldeposito"class="col-lg-6">LOCAL DE DEPOSITO</label>
                <div class="col-lg-6"> 
                  <select class="form-control"  required  name="localdeposito" id="localdeposito">
                    
                    <!-- DINHEIRO -->
                    
                    <option selected value=""></option>

                    <option class="localdinheiro" value="DINHEIRO">Rua Bresser, 1235, Brás, Sao Paulo -SP</option>
                    
                    <!-- TRANSFERÊNCIA -->             
                    <option class="localtransferencia"  value="Banco Santander">Banco Santander</option>
                    <option class="localtransferencia" value="Caixa Econômica Federal">Caixa Econômica Federal</option>
                    <option class="localtransferencia"  value="Lotérica">Lotérica</option>
                    <option class="localtransferencia" value="Banco Itaú">Banco Itaú</option>
                    <option class="localtransferencia"  value="Banco Bradesco">Banco Bradesco</option>                   
                  
                  </select>   
                </div>
              </div>  

              <div class="form-group text-right">
                <div class="col-lg-6 col-lg-offset-6">  
                  <input type="submit" class="btn btn-primary form-control" value="DEPOSITAR">             
                </div>
              </div>
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>  
        </div>
     </div>             
    </section>
    <section class="content container-fluid">
    </section>
  </div>
  <script>
                      $(document).ready(function() {

                        $(".localtransferencia").css('display', 'none')
                        $(".localdinheiro").css('display', 'none')  

                        $("#localdeposito").val($("#localdeposito option:first").val());
                        $("#tipodeposito").val($("#tipodeposito option:first").val());

                        $("#tipodeposito").change(function(){
                       
                        if($(this).val() == "DINHEIRO"){
                          
                          $(".localtransferencia").css('display', 'none')
                          $(".localdinheiro").css('display', 'block')  

                          $("#labeldeposito").html('LOCAIS FÍSICOS') 

                        
                        $("#localdeposito").val($("#localdeposito option:first").val());

                          // $(".localdeposito").val('').change()

                        }else if($(this).val() == "TRANSFERÊNCIA"){
                         
                          $(".localdinheiro").css('display', 'none')  
                          $(".localtransferencia").css('display', 'block') 

                          $("#labeldeposito").html('NOSSAS CONTAS') 
                          
                          $("#localdeposito").val($("#localdeposito option:first").val());

                        }else if($(this).val() == ""){
                         
                         $(".localdinheiro").css('display', 'none')  
                         $(".localtransferencia").css('display', 'none') 

                         $("#labeldeposito").html('LOCAL DE DEPOSITO') 

                         $("#localdeposito").val($("#localdeposito option:first").val());
                       }
                        });
                      });
            
                    </script>

@endsection