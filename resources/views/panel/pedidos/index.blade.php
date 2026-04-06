@extends('layouts.app-painel-admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.message')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <div class="row">
                        <div class="col-md-5 mb-2">
                            <input type="text" class="form-control" name="search_text" placeholder="Pesquisar" />
                        </div>
                        <div class="col-md-2 mb-2">
                            <button type="submit" class="btn btn-success mr-2">Pesquisar</button>

                        </div>
                    </div>

                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>Nº de Carta</th>
                                    <th>Automóvel</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $key => $pedido)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pedido->nome }}</td>
                                        <td>{{ $pedido->telefone }}</td>
                                        <td>{{ $pedido->numero_carta}}</td>
                                        <td>{{$pedido->automovel->marca.' | '.$pedido->automovel->modelo.' | '.$pedido->automovel->cor}}</td>
                                        <td>
                                            <a href="{{ "/panel/pedidos/$pedido->id/edit" }}"
                                                class="btn btn-primary btn-sm">Editar</a>
                                            &nbsp;
                                            <a href="{{ "/panel/pedidos/$pedido->id" }}"
                                                class="btn btn-warning btn-sm">Detalhes</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <x-paginate :objects="$pedidos" />
                </div>
            </div><!-- /.box -->
        </div>
    </div>
@endsection
