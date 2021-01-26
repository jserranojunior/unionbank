@extends('user.headercliente')

@section('main') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">

        <div class="col-lg-offset-2 col-lg-8">
        <div class="box">
            <div class="header-box">           
            <h2 class="center">UNION BANK</h2>
            </div>

            <div class="body-box">
            
            <table class="table  table-hover">
                    <tbody><tr>
                        <td class="text-left">
                            UNION
                        </td>
                        <td class="text-right">
                          
                           {{$dados['valor']}}
                        </td>
                    </tr>
                                                                   
                    <tr class="text-primary">
                        <td class="text-bold">
                        <h4  class="text-left">Total</h4>
                        </td>
                        <td class="text-right">
                            <h4>  

                                {{$dados['valor']}}
                          </h4>
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