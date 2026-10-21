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
                                    <th>Local de Viatura</th>
                                    <th>Tipo de Serviço</th>
                                    <th>Modelo e Marca</th>
                                    <th>Obs.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedido_de_reboques as $key => $pedido)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pedido->nome }}</td>
                                        <td>{{ $pedido->telefone }}</td>
                                        <td>{{ $pedido->local_da_viatura}}</td>
                                        <td>{{ $pedido->tipo_de_servico}}</td>
                                        <td>{{ $pedido->modelo_marca_da_viatura}}</td>
                                        <td>{{ $pedido->observacao}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <x-paginate :objects="$pedido_de_reboques" />
                </div>
            </div><!-- /.box -->
        </div>
    </div>
@endsection
