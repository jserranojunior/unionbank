@extends('layouts.app')

@section('content')
<div class="container bg-elo-dark">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div class="panel panel-transparent">
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div class="col-md-12">
                                <input id="password" type="password"  placeholder="Senha"  class="form-control" name="password" required>
    
                               
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-grey-primary full-width">
                                    Entrar
                                </button>                               
                            </div>
                        </div> 
                        <!-- <div class="form-group">
                            <div class="col-md-12">
                                <a href="{{URL('/register')}}">
                                    <div class="btn btn-grey-primary full-width">
                                        Cadastrar
                                    </div>      
                                </a>                         
                            </div>                            
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="{{URL('/password/reset')}}">
                                    <div class="btn full-width text-black">
                                        Esqueci minha senha
                                    </div>      
                                </a>                         
                            </div>                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

>
@endsection
