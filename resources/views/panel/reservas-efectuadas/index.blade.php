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
                                    <th>Modelo e Marca</th>
                                    <th>Data de Recolha</th>
                                    <th>Local de Recolha</th>
                                    <th>Data de Devolução</th>
                                    <th>Local de Devolução</th>
                                    <th>Dias</th>
                                    <th>Valor Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservas_efectuadas as $key => $pedido)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pedido->cliente->nome }}</td>
                                        <td>{{ $pedido->cliente->telefone }}</td>
                                        <td>{{ $pedido->carro->marca.' | '.$pedido->carro->modelo}}</td>
                                        <td>{{ ''}}</td>
                                        <td>{{ $pedido->local_de_recolha}}</td>
                                        <td>{{ ''}}</td>
                                        <td>{{ $pedido->local_de_devolucao}}</td>
                                        <td>{{ $pedido->total_de_dias}}</td>
                                        <td>{{ number_format($pedido->valor_total,2,',','.')}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <x-paginate :objects="$reservas_efectuadas" />
                </div>
            </div><!-- /.box -->
        </div>
    </div>
@endsection
