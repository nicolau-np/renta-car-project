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
                            {{--<thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nome</th>
                                    <th>Nacionalidade</th>
                                    <th>Telefone</th>
                                    <th>Nº B.I</th>
                                    <th>Nº de Carta</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $key => $cliente)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->nacionalidade }}</td>
                                        <td>{{ $cliente->telefone }}</td>
                                        <td>{{ $cliente->bi }}</td>
                                        <td>{{ $cliente->carta_de_conducao}}</td>
                                        <td>
                                            <a href="{{ "/panel/clientes/$item->id/edit" }}"
                                                class="btn btn-primary btn-sm">Editar</a>
                                            &nbsp;
                                            <a href="{{ "/panel/clientes/$item->id" }}"
                                                class="btn btn-warning btn-sm">Detalhes</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>--}}
                        </table>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{--<x-paginate :objects="$clientes" />--}}
                </div>
            </div><!-- /.box -->
        </div>
    </div>
@endsection
