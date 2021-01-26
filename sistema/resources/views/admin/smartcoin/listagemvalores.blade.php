
@extends('admin.headeradm', $notificacoes)

@section('main') 
  <div class="content-wrapper">
    <section class="content-header text-center">
      <h1>
        VALORES <br>
        <small></small>
      </h1>      
    </section>

    <section class="content container-fluid">

<div class="col-md-4 col-md-offset-4">

<div class="box">
    <div class="box-header text-center">
        <a href="{{Route('admin.smart.create')}}">
            <div class="btn btn-primary">ADICIONAR</div>
        </a>
    </div>

  <div class="box-body">
       <table class="table table-condensed table-hover " id="tabelaSmartCoin">
    <thead>
        <tr>
            <th>DATA</th>
            <th>VALOR</th>
         </tr>
    </thead>
      <tbody>
      @foreach($dados as $item)     
            <tr onclick="editarSmartCoin()" class="mouse-point">
                <td class="data_mascara">{{$item->data}}</td>
                <td class="valor_mascara">{{$item->valor}}</td>
            </tr>      
      @endforeach  
        </tbody>
        </table>   
  </div>
</div>         
</div>
     </section>
  </div>

  <script>
  function editarSmartCoin($id){

    window.location.href = "valorsmartcoin/editar/"+$id;
  }
  
  </script>
@endsection

