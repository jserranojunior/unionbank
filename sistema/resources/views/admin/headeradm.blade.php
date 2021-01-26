<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
      <span class="logo-lg"><b>UNION BANK</span>
    </a>


    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{$notification}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">
              Você tem {{$notification}} 
              @if($notification > 1) 
                notificações 
              @else 
                notificacão 
              @endif  
              </li>
              <li>

                <ul class="menu">
                </ul>
              </li>
              <li class="footer text-center"><a href="#">Visualizar</a></li>
            </ul>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img  src="{{URL('img')}}/{{ auth()->guard('admin')->user()->image }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ auth()->guard('admin')->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{URL('img')}}/{{ auth()->guard('admin')->user()->image }}"  class="img-circle" alt="User Image">
                <p class="text-center">
                  {{ auth()->guard('admin')->user()->name }}     
                </p>                
              </li>
              

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{Route('admin.logout')}}" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>          
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL('img')}}/{{ auth()->guard('admin')->user()->image }}"  class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center">MENU</li>
        <li class=""><a href="{{URL('/admin')}}"><i class="fa fa-home"></i> <span>INÍCIO</span></a></li>
        <li><a href="{{URL('admin/clientes')}}"><i class="fa fa-users"></i> <span>CLIENTES</span></a></li>
        <li><a href="{{URL('admin/operacoes')}}"><i class="fa fa-users"></i> <span>OPERAÇÔES</span></a></li>
        <li><a href="{{URL('admin/portalsaude')}}"><i class="fa fa-heartbeat"></i> <span>PORTAL SAÚDE</span></a></li>

        <!-- <li>
          <a href="{{Route('admin.analise.index')}}">
            <i class="fa fa-file-text-o"></i>  
              <span>ANALISE</span>
          </a>
        </li> -->

        
        <!-- <li class="treeview">
              <a href="#">
                  <i class="fa fa-bell-o"></i> <span>OPERACÕES</span>
                  
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>           
              </a>
              <ul class="treeview-menu"> 
             <li><a href="{{URL('admin/operacoes')}}"><i class="f"></i> <span>PASANAKU</span>
               
            @if($notification > 0) 
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right">{{$notification}}</span>
                    </span>
                </a>               
                  @endif

            </a></li> -->
             
            <!-- <li><a href="{{URL('admin/operacoes/smart')}}"><i class=""></i> <span>SMART</span></a></li>
              </ul>
            </li> -->
 
            <!-- <li>
          <a href="{{Route('admin.smart.index')}}">
            <i class="fa fa-line-chart"></i>  
              <span>SMARTCOIN</span>
          </a>
        </li>  -->
    
        <li>
          <a href="{{Route('admin.logout')}}">
            <i class="fa fa-power-off"></i>  
              <span>SAIR</span>
          </a>
        </li>

        

      </ul>
    </section>
  </aside>



  @yield('main')

  

  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Union Bank
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Union</a>.</strong>
  </footer>

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