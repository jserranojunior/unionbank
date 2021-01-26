@extends('layouts.app')
@section('content') 

<div class="container masthead text-center text-white d-flex">
  <div class="row  row-servicos row-espaco">
   <!-- <div class="col-xs-4 col-xs-offset-2">
        <img class="img-fluid logo-inicial" src="{{URL('/img/smartmais.jpeg')}}" alt="">
    </div> -->
    <!-- 
    <div class="col-xs-4">
      <img class="img-fluid logo-inicial" src="{{URL('/img/visa.png')}}" alt="">
    </div>             -->
  </div>
  <div class="row  row-servicos row-espaco">            
    <a class="text-white text-bold js-scroll-trigger" href="{{url('/login')}}">
      <h4>LOGIN<h4>
    </a>
    <!-- <a class="text-white text-bold js-scroll-trigger" href="{{URL('/register')}}">
      <h4>CADASTRO<h4>
    </a> -->
  </div>
  <div class="row">
    <a href="#" src="{{URL('/img/google-play.png')}}" alt=""> </a>
    twiier 
  </div>
</div>

@endsection


