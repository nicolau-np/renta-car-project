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
                    <a href="{{ '/panel/carros' }}" class="btn btn-warning btn-block mb-2">Consultar
                    </a>
                    <a href="{{ '/panel/carros/create' }}" class="btn btn-success btn-block mb-2">Novo
                    </a>
                    <a href="{{ "/panel/carros/$carro->id/edit" }}" class="btn btn-primary btn-block margin-bottom">Editar
                    </a>
                    <form action="{{ "/panel/carros/$carro->id" }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block margin-bottom">Eliminar </button>
                    </form>
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Explorar</h3>
                        </div>
                        <div class="box-body no-padding">
                            <div class="mb-5">
                                <img src="{{ url('storage/carros/' . $carro->img) }}" class="img-fluid-logo" alt=""
                                    srcset="" />
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /. box -->

                </div><!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ $carro->marca . ' ' . $carro->modelo }}</h3>

                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-read-message">
                                <div class="row">
                                    <div class="col-md-6 mb-2 column">
                                        <span>Marca:</span> {{ $carro->marca }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Modelo:</span> {{ $carro->email }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Matrícula:</span> {{ $carro->matricula }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Lugares:</span> {{ $carro->lugares }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Caixa do Automóvel:</span> {{ $carro->caixa_automovel }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Kilometragem:</span> {{ $carro->kilometragem }}
                                    </div>
                                    <div class="col-md-6 mb-2 column">
                                        <span>Preço Por dia:</span> {{ $carro->preco_por_dia }}
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
