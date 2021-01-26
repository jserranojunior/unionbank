@extends('user.headercliente')

@section('main') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
        <div class="col-lg-offset-2 col-lg-8">
        <div class="box">
            <div class="header-box">
            <h2 class="center">EXTRATO</h2>
            </div>
            <div class="body-box">
            
            <table class="table  table-hover">
            <thead>    
            <tr>
                    <td class="text-left">DATA</td>
                    <td class="text-right">ELO</td>
                </tr>
        </thead>
                            <tbody>
                            @foreach($dados as $item)
                            <tr>
                                <td class="text-left data_mascara">
                                    {{$item->data_efetuada}}
                                </td>
                                <td class="text-right">
                                    {{$item->tipo}}<span>{{number_format($item->valor, 2,',','.')}}</span>
                                </td>
                            </tr>
                            @endforeach
                            
                                                                           
                            <tr class="text-primary">
                                <td class="text-bold text-left">
                                <h4>Total</h4>
                                </td>
                                <td class="text-right ">
                                    <h4>{{$total}}</h4>
                                </td>
                            </tr>
                        </tbody>
                      </table>
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
