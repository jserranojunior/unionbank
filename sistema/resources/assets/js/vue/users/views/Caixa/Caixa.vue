<template>
    <div>
       <div class="container-fluid">
   
                   <div class="row justify-content-center">
                       <div class="col-12 col-md-12 col-lg-12">
                                <div class="row bg-smart">
                                    <div class="col-12 ">
                                        <header class="bg-smart">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 float-center-sm">
                                                    <img class="img-fluid float-center float-center-sm" src="img/contas/logo.jpg" alt="">
                                                </div>
                                                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                    <div class="float-right float-center-sm user-painel ">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-comments"></i>
                                                        <span class="text-white">
                                                            | David Lira <i class="far fa-user"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        
                                    </div>
                                </div>
                                <div class="row bg-dark">
                                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                                        </li> |
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lançamentos</a>
                                        </li> |
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Consultas</a>
                                        </li> |
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Administração</a>
                                        </li>


                                        </ul>
                                        <form class="form-inline my-2 my-lg-0">
                                           <span class="text-white">Central de Ajuda</span>
                                        </form>
                                    </div>
                                </nav>
                                </div>

                                <div class="row bg-light">
                                    <div class="col-12  float-center-sm">                                   
                                      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-text">
                                            <h5 class="text-smart text-title-smart float-center-sm">
                                            Receitas e Despesas
                                        </h5>
                                      </nav>                                   

                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-center-sm">
                                        <div class="btn btn-outline-danger btn-sm float-cent">+ ADICIONAR</div>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ORDERNAR POR
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">#</a>
                                            <a class="dropdown-item" href="#">#</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 col-xs-8 col-sm-8 col-md-4 col-lg-5 col-space float-right-md float-none-sm"> 
                                        
                                            <input type="text" class="form-control">      
                                        
                                                                 
                                    </div>
                                    <div class="col-4 col-xs-4 col-sm-4 col-md-2 col-lg-1 col-space">
                                        <div class="btn-group float-right" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                FILTRAR
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">#</a>
                                            <a class="dropdown-item" href="#">#</a>
                                        </div>
                                    </div>
                                </div>        
                            </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <div class="row row-space">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                            <div class="btn text-smart"> <i class="fas fa-chevron-left"></i> </div>
                                                            <div class="btn btn-sm">2019</div>
                                                            <div class="btn  text-smart"> <i class="fas fa-chevron-right"></i> </div>  
                                                            <div class="btn text-smart"> <i class="fas fa-chevron-left"></i> </div>
                                                            <div class="btn btn-sm">JAN</div>
                                                            <div class="btn btn-sm">FEV</div>
                                                            <div class="btn btn-sm">MAR</div>
                                                            <div class="btn btn-sm">ABR</div>
                                                            <div class="btn btn-sm">MAI</div>
                                                            <div class="btn btn-sm">JUN</div>
                                                            <div class="btn btn-sm">JUL</div>
                                                            <div class="btn btn-sm">AGO</div>
                                                            <div class="btn btn-sm">SET</div>
                                                            <div class="btn btn-sm">OUT</div>
                                                            <div class="btn btn-sm">NOV</div>
                                                            <div class="btn btn-sm">DEZ</div> 
                                                         <div class="btn  text-smart"> <i class="fas fa-chevron-right"></i> </div>  
                                                       
                                                    </div>                                                
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                               <div class="table-responsive">
                                                    <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <input type="checkbox">
                                                            </th>
                                                            <th>Data</th>
                                                            <th>Descrição</th>
                                                            <th>Valor</th>
                                                            <th>Saldo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="tr-yellow">
                                                            <td colspan="7"> SALDO ANTERIOR</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>21/07/2019</td>
                                                            <td><span class="text-danger">  UNION BANK</span></td>
                                                            <td><span class="text-danger">  180,00 </span></td>
                                                            <td><span class="text-danger">  180,00 </span></td>
                                                            <td><span class="text-danger">  <i class="fas fa-circle"></i> </span></td>
                                                            <td><span class="text-danger">  <i class="fas fa-check"></i> </span></td>
                                                        
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox"></td>
                                                            <td>21/07/2019</td>
                                                            <td><span class="text-success">  UNION BANK </span></td>
                                                            <td><span class="text-success">  190,00 </span></td>
                                                            <td><span class="text-success">  10,00 </span></td>
                                                            <td><span class="text-success">  <i class="fas fa-circle"></i> </span></td>
                                                            <td><span class="text-success">  <i class="fas fa-check"></i> </span></td>
                                                            
                                                        </tr>
                                                        <tr class="tr-yellow">
                                                            <td colspan="3"> TOTAL DOS LANÇAMENTOS</td>
                                                            <td colspan="4" class="text-right">
                                                                <span class="text-success">190,00</span> - 
                                                                <span class="text-danger">180,00</span> = 
                                                                <span class="text-success">10,00</span>
                                                                </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                               </div>
                                            </div>
                                        </div>
                                        </div>
                                        <br>
                                       <div class="row">
                                           <div class="col-12">
                                                <div class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i> PAGAR</div>
                                        <div class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i> EXCLUIR</div>
                                           </div>
                                       </div>
                                    </div>
                                    <!-- BARRA LATERAL -->
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="row row-space">
                                            <div class="col">
                                                
                                                    <div class="card">
                                                       
                                                            <div class="row">
                                                                <div class="col-6 float-center text-smart">
                                                        <input type="date"> <i class="far fa-calendar-alt"></i>                                                
                                                    </div>
                                                    <div class="col-6 float-center text-smart">
                                                        <input type="date">   <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row row-space">
                                            <div class="col">
                                                <div class="card">
                                            <div class="card-header">
                                                <i class="fas fa-cog  text-smart"></i>  <span class="font-weight-bold">Filtros Rápidos </span>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="text-smart">Lançamentos</h6> <br>
                                                <div class="row">                                                    
                                                    <div class="col-6">
                                                    <input type="checkbox"> Crédito<br>
                                                     <input type="checkbox"> Realizado<br>
                                                      <input type="checkbox"> Vendido<br>
                                                </div>
                                                <div class="col-6">
                                                     <input type="checkbox"> Débito<br>
                                                      <input type="checkbox"> Não Realizado<br>
                                                       <input type="checkbox"> A Vencer<br>
                                                </div>
                                                </div>
                                                <div class="row row-space content-justify-center">
                                                    <div class="col-12">
                                                        <div class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i> FILTRAR</div>
                                                        <div class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i> LIMPAR</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <div class="card">
                                            <div class="card-header">
                                                <i class="fas fa-cog  text-smart"></i> <span class="font-weight-bold">Saldos</span> 
                                            </div>
                                            <div class="card-body">                                               
                                                <div class="row">
                                                    <table class="table">
                                                        <tr>
                                                            <td><span  class="font-weight-bold">Saldo Anterior</span><br>
                                                                30/06/2019
                                                            </td>
                                                            <td class="text-smart">0,00</td>
                                                        </tr>                                                            
                                                        <tr>
                                                            <td><span  class="font-weight-bold"> Saldo do Período </span><br>
                                                                01 a 31/07/2019
                                                            </td>
                                                               <td class="text-smart"> 10,00</td>
                                                        </tr>  
                                                        <tr>
                                                            <td><span  class="font-weight-bold"> Saldo Acumulado </span><br>
                                                            30/06/2019
                                                            </td>
                                                            <td class="text-smart">10,00</td>
                                                        </tr>   
                                                        <tr class="text-danger">
                                                            <td>Saldo Atual</td>
                                                            <td class="text-smart">10,00</td>
                                                        </tr>
                                                    </table>                                             
                                                </div>                                               
                                            </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>               
                            
                       </div>
                   </div>
               </div>
           </div>
      
</template>

<script>
export default {
  name: "CaixaConta",
};
</script>
<style>
.tr-yellow {
  background-color: #faffce;
}
.row-space,
.col-space {
  margin-top: 7px;
}
.bg-smart {
  background-color: #fe4101;
}
.text-title-smart {
  margin-top: 7px;
  font-weight: bold;
}
.user-painel {
  margin: 17px;
}

.text-smart {
  color: #fe4101;
}

@media screen and (min-width: 767px) {
  .float-right-md {
    float: right;
  }
  .float-left-md {
    float: right;
  }
}

@media screen and (max-width: 767px) {
  .float-none-sm {
    float: none !important;
  }
  .float-center-sm {
    float: center !important;
    text-align: center !important;
  }
  .float-center-sm img {
    float: center !important;
    text-align: center !important;
  }
}
</style>
