@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div class="panel panel-transparent">
                <div class="panel-heading text-center">ADMINISTRADOR</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL('admin/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                                <input id="email" placeholder="E-mail" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">
                                <input id="password" placeholder="Senha" type="password" class="form-control" name="password" required>
    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-grey-primary  full-width">
                                    Login
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
