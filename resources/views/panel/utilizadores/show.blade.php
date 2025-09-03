@extends('layouts.app-painel-admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.message')
        </div>
    </div>
    <!-- Right side column. Contains the navbar and content of the page -->

    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-3">
                    <a href="{{ '/panel/utilizadores' }}" class="btn btn-warning btn-block mb-2">Consultar
                    </a>
                    <a href="{{ '/panel/utilizadores/create' }}" class="btn btn-success btn-block mb-2">Novo
                    </a>
                    <a href="{{ "/panel/utilizadores/$utilizador->id/edit" }}"
                        class="btn btn-primary btn-block margin-bottom">Editar </a>
                    <form action="{{ "/panel/utilizadores/$utilizador->id" }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block margin-bottom">Eliminar </button>
                    </form>


                </div><!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $utilizador->name }}</h3>

                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-read-message">
                                <div class="row">
                                    <div class="col-md-6 mb-2 column">
                                        <span>Nome:</span> {{ $utilizador->name }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Email:</span> {{ $utilizador->email }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Nível de Acesso:</span> {{ $utilizador->nivel_de_acesso }}
                                    </div>

                                </div>
                            </div><!-- /.mailbox-read-message -->
                        </div><!-- /.box-body -->

                    </div><!-- /. box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

        </div>
    </div>
@endsection
