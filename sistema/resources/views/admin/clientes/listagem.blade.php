
@extends('admin.headeradm', $notificacoes)

@section('main') 
  <div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        CLIENTES <br>
        <small></small>
      </h1>      
    </section>

<section class="content container-fluid">
  <div class="box">
    <div class="box-body">
        <table class="table table-condensed table-hover" id="tabelaClientes">
      <thead>
          <tr>
              <th>NOME</th>
              <th>EMAIL</th>
              <th>CPF</th>    
              <th>DATA DE NASCIMENTO</th> 
              <th>CELULAR</th> 
          </tr>
      </thead>
      <tbody>     
        @foreach ($dados as $item)

            <tr onclick="editarCliente({{$item->id}})" class="mouse-point">
                <td>  {{$item->name}}</td>
                <td>  {{$item->email}}</td>
                <td class="cpf_mascara">  {{$item->cpf}}</td>
                <td class="data_mascara">  {{$item->data_nascimento}}</td>
                <td> {{$item->celular}}</td>
            </tr>      
        @endforeach
      </tbody>
    </table>   
  </div>
</div>         

     </section>
  </div>

  <script>
  function editarCliente($id){

    window.location.href = "clientes/editar/"+$id;
  }
  
  </script>
@endsection

