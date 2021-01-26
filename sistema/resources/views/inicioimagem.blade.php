<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Elo</title>
    <!-- Styles -->
    <link href="{{ url('css/all.css') }}" rel="stylesheet">
    <script src="{{ url('js/all.js') }}"></script>
</head>
<body class="body-color-inicio">

<header class="masthead text-center text-white d-flex">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <img src=" {{ url('img/imagemcelular.png') }}" alt="">
      </div>
    </div>
  </div>   
</header>

</body>
</html>
