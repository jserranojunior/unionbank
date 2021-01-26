<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Union | Início </title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



   <link href="{{ url('css/all.css') }}" rel="stylesheet">
    <script src="{{ url('js/all.js') }}"></script> 


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <header class="main-header">


    <a href="#" class="logo">
      <span class="logo-mini"><b>U</b>B</span>
      <span class="logo-lg">
     UNION<b> BANK </b></span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 mensages</li>
              <li>

                <ul class="menu">

                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">Ver todas as mensagens</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 notificações</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                 
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 tarefas</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver todas as tarefas</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- <img src="{{URL('img')}}/{{auth()->user()->image}}" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
              <!-- {{auth()->user()->name}} -->
                <!-- <img src="{{URL('img')}}/{{auth()->user()->image}}"  class="img-circle" alt="User Image"> -->

                <!-- <p class="text-center">
                
                  <small>Administrador</small>
                </p>
                 -->
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{Route('logout')}}" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="{{URL('img')}}/{{auth()->user()->image}}"  class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <!-- <p>{{auth()->user()->name}}</p> -->
          <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{URL('/cliente')}}"><i class="fa fa-home"></i> <span>INÍCIO</span></a></li>


          <!-- <li class="treeview">
              <a href="#">
                  <i class="fa fa-money "></i> <span>CONTA SMART</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>           
              </a>
              <ul class="treeview-menu">
                 -->
                 <li><a href="{{URL('saldo')}}"><i class="fa fa-university"></i> <span>SALDO</span></a></li>
            <li><a href="{{URL('extrato')}}"><i class="fa fa-line-chart"></i> <span>EXTRATO</span></a></li>
            
            <li><a href="{{URL('deposito')}}"><i class="fa fa-plus-square-o"></i> <span>DEPOSITO</span></a></li>
            <li><a href="{{URL('#')}}"><i class="fa fa-heartbeat"></i> <span>UNION PORTAL SAÚDE</span></a></li>  
                    
            <li><a href="{{URL('resgate')}}"><i class="fa fa-life-ring"></i> <span>RESGATE</span></a></li>          
            <!-- <li><a href="{{URL('smart/resgate')}}"><i class="fa fa-circle-o-notch "></i> <span>TRANSFÊRENCIAS <br> ENTRE CONTAS</span></a></li>           -->
             
              <!-- </ul>
            </li> -->

            
        <!-- <li class=""><a target="_blank" href="https://app.conta.mobi/login"><i class="fa fa-university"></i> <span>MOBI VISA</span></a></li>   -->

       <!-- <li class=""><a target="_blank" href="https://meu.brasilprepagos.com.br/bpp?_ga=2.8126130.1635589378.1529004737-698247966.1526345326&_gac=1.250867188.1529004835.CjwKCAjwpIjZBRBsEiwA0TN1r4qyFvjPFSbp5mifabKgf3FAKymNuLCq6aBGLX4fIUPiMsO9Z6P0qhoCOC"><i class="fa fa-bold"></i> <span>BPP VISA</span></a></li>   -->

        <!-- <li class=""><a target="_blank" href="https://play.google.com/store/apps/details?id=br.com.brasilprepago"><i class="fa fa-arrow-circle-down"></i> <span>BPP APP</span></a></li>   -->

        <!-- {{URL('transferencia')}} -->
        <li class=""><a href="#"><i class="fa fa-exchange">
          </i><span>TRANSFÊRENCIA</span></a>
        </li>

        <li ><a class="link-whatsapp" href="whatsapp://send?phone=5511998068930"><i class="fa fa-comments">
          </i><span>CONTATO</span></a>
        </li>   

        
        <li><a class="" href="{{Route('logout')}}"><i class="fa fa-power-off"></i> <span>SAIR</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  @yield('main')

  



  <!-- Main Footer -->
  <footer class="main-footer">
  
    <!-- To the right -->
    <a class="link-whatsapp" id="link-whatsapp-footer"  href="whatsapp://send?phone=5511998068930">
      <div class="pull-right hidden-xs text-bold text-success">
         CONTATO
        <img class="img-reponsive logo-whats-footer" src="{{URL('img')}}/whatsapp.jpeg" alt="">
      </div>
    </a>

    <!-- Default to the left -->
    <strong> <a href="/">UNION BANK</a> - </strong> Realizando sonhos 
    
  </footer>
 
    <script>
  
 function isMobile()
 {
   var userAgent = navigator.userAgent.toLowerCase();
   if( userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i)!= -1 )
     return true;
 }
 
 $isMobile = isMobile();

$(document).ready(function(){
  if($isMobile == true){  
    $(".link-whatsapp").attr("href", "whatsapp://send?phone=5511998068930");         
  }else{
    $(".link-whatsapp").attr("href", "https://web.whatsapp.com/send?phone=5511998068930"); 
  }
});


   </script>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


</body>
</html>