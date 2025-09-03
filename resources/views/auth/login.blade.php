@extends('layouts.app-painel-admin')
@section('content')


        <div class="login-box">
            <div class="login-logo">
                <a href="/painel-admin"><b>RENTA CAR</b></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        @include('includes.message')
                    </div>
                </div>
                <p class="login-box-msg">Faça login para iniciar a sua sessão</p>
                <form action="/auth/login" method="post">
                    @method('POST')
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{old('email', null)}}" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Palavra-Passe" name="password" value="{{old('password', null)}}" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar Me
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                        </div><!-- /.col -->
                    </div>
                </form>



                <a href="/auth/forget-password">Esqueci-me da minha Palavra-Passe</a><br>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    @endsection
