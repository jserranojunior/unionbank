<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Union Bank</title>
    <!-- Styles -->
    <link href="{{ url('css/all.css') }}" rel="stylesheet">
    <script src="{{ url('js/all.js') }}"></script>
</head>
<body class="body-color-inicio">

<header class="masthead text-center text-white d-flex">
  <div class="container bg-elo-dark">
    <div class="row row-espaco">
      <div class="col-lg-12">
      <div class="row justify-content-sm-center">
                <div class="col-sm-12 text-center">
                    <img class="img-logo img-logo-topo img-fluid" src="{{ url('img/elo-logo.png') }}" alt="">                   
                </div>
            </div>
       
      </div>
    </div>
  </div>   
</header>

        @yield('content')  


   
</body>
</html>

<style>

.img-white{
  background-color:white;
}

.img-logo-topo{
    width: 200px;
}

.img-logo {
    margin-bottom: 20px;
    margin-top: 30px;
}
</style>