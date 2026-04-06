@extends('layouts.app')
@section('content')
    <section class="section__container about__container pb-50px" id="about">
        <di class="container">
            <form action="/solicitar-carro" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        @include('includes.message')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Nome Completo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" />
                        @if ($errors->has('nome'))
                            <span class="text-danger">{{ $errors->first('nome') }}</span>
                        @endif
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="">Possui carta de Condução? <span class="text-danger">*</span></label>
                        <select name="tem_carta" id="" class="form-select">
                            <option value="" hidden>Possui carta de Condução</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                        @if ($errors->has('tem_carta'))
                            <span class="text-danger">{{ $errors->first('tem_carta') }}</span>
                        @endif
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="">Nº de Telefone</label>
                        <input type="text" class="form-control" name="telefone" placeholder="Nº da Telefone" />
                        @if ($errors->has('telefone'))
                            <span class="text-danger">{{ $errors->first('telefone') }}</span>
                        @endif
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="">Nº da Carta</label>
                        <input type="text" class="form-control" name="numero_carta" placeholder="Nº da Carta" />
                        @if ($errors->has('numero_carta'))
                            <span class="text-danger">{{ $errors->first('numero_carta') }}</span>
                        @endif
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="">Bilhete de Identidade</label>
                        <input type="file" class="form-control" name="bilhete" placeholder="Bilhete de Identidade" />
                        @if ($errors->has('bilhete'))
                            <span class="text-danger">{{ $errors->first('bilhete') }}</span>
                        @endif
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="">Solicitar Motorista? <span class="text-danger">*</span></label>
                        <select name="solicitar_motorista" id="" class="form-select">
                            <option value="" hidden>Solicitar Motorista</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                        @if ($errors->has('solicitar_motorista'))
                            <span class="text-danger">{{ $errors->first('solicitar_motorista') }}</span>
                        @endif
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="">Solicitar Guia? <span class="text-danger">*</span></label>
                        <select name="solicitar_guia" id="" class="form-select">
                            <option value="" hidden>Solicitar Guia</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                        @if ($errors->has('solicitar_guia'))
                            <span class="text-danger">{{ $errors->first('solicitar_guia') }}</span>
                        @endif
                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="">Automóvel? <span class="text-danger">*</span></label>
                        <select name="automovel_id" id="" class="form-select">
                            <option value="" hidden>Automóvel</option>
                            @foreach ($carros as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->marca . ' | ' . $item->modelo . ' | ' . $item->cor }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('automovel_id'))
                            <span class="text-danger">{{ $errors->first('automovel_id') }}</span>
                        @endif
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>

                </div>
            </form>
        </di>



    </section>
@endsection
