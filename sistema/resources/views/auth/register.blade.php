@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div class="panel panel-transparent">
                <div class="panel-heading text-center">REGISTRAR</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" placeholder="Nome"  name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                   

                            <div class="col-md-12">
                                <input id="cpf" type="text" class="form-control cpf_mascara" placeholder="CPF ou CNPJ"  name="cpf" value="{{ old('cpf') }}"  required >

                                @if ($errors->has('cpf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data_nascimento') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <label for="data_nascimento" class="text-center">Nascimento</label>
                                <input id="data_nascimento" type="date" class="form-control" name="data_nascimento" value="{{ old('data_nascimento') }}" required>

                                @if ($errors->has('data_nascimento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <!-- jQuery 3 -->

                        <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                          

                            <div class="col-md-12">
                                <input id="celular"  type="text" placeholder="Celular"  class="form-control telefone_mascara" name="celular" value="{{ old('celular') }}" required>

                                @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
           

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="E-mail"  class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Senha" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
               

                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Confirmar Senha" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-grey-primary full-width">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                        <input id="image" type="hidden" class="form-control" value="cliente.png" name="image">
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
