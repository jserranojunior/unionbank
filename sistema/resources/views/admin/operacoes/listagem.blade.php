
@extends('admin.headeradm', $notificacoes)

@section('main') 

  <div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        OPERAÇÕES <br>
        <small></small>
      </h1>
      
    </section>
    <section class="content container-fluid">
         <div class="col-md-10 col-md-offset-1">
          
          <div class="box">
            <div class="box-header text-center">
            </div>
            <!-- /.box-header -->
            <div class="box-body ">
              <table class="table table-condensed table-hover">
              <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        OPERAÇÃO
                    </th>  
                    <th>
                        USUARIO
                    </th>
                    <th>
                        VALOR
                    </th>
                    <th>
                        DATA
                    </th>
                    
                </tr>
              </thead>
                <tbody>
                
                @foreach($dados as $item)
                
                    <tr class="mouse-point" onclick="emitir({{$item->id}});">
                        <td class="text-maiuscula">
                                 {{$count++}}
                        </td>
                        <td class="text-uppercase">
                            {{$item->tipo}}
                        </td>
                        <td>
                           {{$item->name}}
                        </td>
                        <td>
                            <span class="">{{$item->valor}}</span>
                        </td>
                        <td>
                            <span class="">{{$item->data_agendada}}</span>
                        </td>
                        
                    </tr> 
                    
                @endforeach
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
     </section>  
 </div>

 <script>
        function emitir(id){
    
 var $url = 'operacoes/editar/' + id;
 
  window.location = $url;
 }

        
        </script>


@endsection

