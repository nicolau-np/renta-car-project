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
                        <a href="{{ '/panel/utilizadores' }}" class="btn btn btn-success">Consultar</a>
                    </h3>
                </div>
                <div class="box-body">
                    <form action="{{ '/panel/utilizadores' }}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label for="name">Nome <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" placeholder="Nome"
                                    value="{{ old('name', null) }}" />
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="email">E-mail <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="email" placeholder="E-mail"
                                    value="{{ old('email', null) }}" />
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2 mb-2">
                                <label for="nivel_de_acesso">Nível de Acesso <span class="text-danger">*</span></label>
                                <select name="nivel_de_acesso" class="form-control">
                                    <option value="" hidden>Nível de Acesso</option>
                                    @foreach (config('constants.CATEGORIA_DE_UTILIZADOR') as $key => $item)
                                        <option value="{{ $item }}"
                                            {{ old('nivel_de_acesso', null) == $item ? 'selected' : null }}>
                                            {{ $item }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('nivel_de_acesso'))
                                    <span class="text-danger">{{ $errors->first('nivel_de_acesso') }}</span>
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
