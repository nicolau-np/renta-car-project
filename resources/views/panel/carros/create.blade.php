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
                    <h3 class="box-title">
                        <a href="{{ '/panel/carros' }}" class="btn btn btn-success">Consultar</a>
                    </h3>
                </div>
                <div class="box-body">
                    <form action="{{ '/panel/carros' }}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-2 mb-2">
                                <label for="matricula">Matrícula <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="matricula" placeholder="Matrícula"
                                    value="{{ old('matricula', null) }}" />
                                @if ($errors->has('matricula'))
                                    <span class="text-danger">{{ $errors->first('matricula') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="marca">Marca <span class="text-danger">*</span></label>
                                <select name="marca" class="form-control">
                                    <option value="" hidden>Marca</option>
                                    @foreach (config('constants.CATEGORIAS_DE_CARROS') as $key => $item)
                                        <option value="{{ $item }}"
                                            {{ old('marca', null) == $item ? 'selected' : null }}>
                                            {{ $item }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('marca'))
                                    <span class="text-danger">{{ $errors->first('marca') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="modelo">Modelo <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="modelo" placeholder="Modelo"
                                    value="{{ old('modelo', null) }}" />
                                @if ($errors->has('modelo'))
                                    <span class="text-danger">{{ $errors->first('modelo') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="cor">Cor <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="cor" placeholder="Cor"
                                    value="{{ old('cor', null) }}" />
                                @if ($errors->has('cor'))
                                    <span class="text-danger">{{ $errors->first('cor') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="caixa_automovel">Caixa do Automóvel <span class="text-danger">*</span></label>
                                <select name="caixa_automovel" class="form-control">
                                    <option value="" hidden>Caixa do Automóvel</option>
                                    @foreach (config('constants.CAIXA_AUTOMOVEL') as $key => $item)
                                        <option value="{{ $item }}"
                                            {{ old('caixa_automovel', null) == $item ? 'selected' : null }}>
                                            {{ $item }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('caixa_automovel'))
                                    <span class="text-danger">{{ $errors->first('caixa_automovel') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="lugares">Lugares <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="lugares" placeholder="Lugares"
                                    value="{{ old('lugares', null) }}" />
                                @if ($errors->has('lugares'))
                                    <span class="text-danger">{{ $errors->first('lugares') }}</span>
                                @endif
                            </div>

                             <div class="col-md-2 mb-2">
                                <label for="kilometragem">Kilometragem <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="kilometragem" placeholder="Kilometragem"
                                    value="{{ old('kilometragem', null) }}" />
                                @if ($errors->has('kilometragem'))
                                    <span class="text-danger">{{ $errors->first('kilometragem') }}</span>
                                @endif
                            </div>

                             <div class="col-md-4 mb-2">
                                <label for="img">Imagem <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" name="img" value="{{ old('img', null) }}" />
                                @if ($errors->has('img'))
                                    <span class="text-danger">{{ $errors->first('img') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="preco_por_dia">Preço por dia <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="preco_por_dia" placeholder="Preço por dia"
                                    value="{{ old('preco_por_dia', null) }}" />
                                @if ($errors->has('preco_por_dia'))
                                    <span class="text-danger">{{ $errors->first('preco_por_dia') }}</span>
                                @endif
                            </div>


                            <div class="col-md-12">
                                <hr />
                            </div>
                            <div class="col-md-12 mb-2">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
