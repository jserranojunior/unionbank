
@extends('admin.headeradm', $notificacoes)

@section('main') 

  <div class="content-wrapper">
    

    @foreach($dados as $item)
      <div class="container">
          <div class="col-md-6 col-md-offset-3">  
              <h3 class="text-center" >OPERAÇÃO NÚMERO: {{$item->id}} </h3>
        <div class="box box-primary">
          <div class="box-header text-center"> </div>
            <div class="box-body text-center">
           
                
                Nome do cliente: {{$item->name}} <br>
                Tipo de operação: {{$item->tipo}} <br>
                Valor: {{$item->valor}} <br>
                Data: {{$item->data_agendada}} <br>
        

              </div> 
              <div class="box-footer text-center">
                <button class="btn btn-success" onclick="emitir({{$item->id}});" data-toggle="modal" data-target=".bs-example-modal-sm">EMITIR</button>
                <button class="btn btn-danger text-right" onclick="excluir({{$item->id}});" data-toggle="modal" data-target=".bs-example-modal-sm">EXCLUIR</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        
    @endforeach
    
     </section>  
 </div>

 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
          
            <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header text-center">DESEJA REALMENTE <span id="tipoAcao"></span>?</div>
              <div class="box-body text-center">
                  <button class="btn btn-success"  onclick="submitar();">SIM</button>
                  <span class="text-left"><button class="btn btn-danger" data-dismiss="modal" >NÂO</button></span>
              </div>
            
          </div>
      </div>
      </div>
    </div>
  </div>
  <form action="" method="post" id="formPrincipal" name="formPrincipal">
    <input type="hidden" id="id" value="" name="id"> 
    <input type="hidden" id="id_admin" value="{{ auth()->guard('admin')->user()->id }}" name="id_admin"> 
   
    {{ csrf_field() }}
  </form>
  
  <script>
  function emitir(id){     
    $("#tipoAcao").html("EMITIR");
    $("#id").val(id);
    $("#formPrincipal").attr("action", "../emitir");
  }
  function excluir(id){    
     $("#tipoAcao").html("EXCLUIR"); 
     $("#id").val(id);
    $("#formPrincipal").attr("action", "../excluir");   
  }

  function submitar(id){    
    $("#formPrincipal").submit();
  }
  </script>

@endsection

