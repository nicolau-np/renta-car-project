@extends('layouts.app')
@section('content')

    {{-- HERO DA PÁGINA --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Fazer Reserva</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto;">
            Escolha o veículo, indique as datas e finalize a sua reserva em poucos minutos.

        </p>
    </section>

    {{-- MENSAGENS DE FEEDBACK --}}
    @if (session('success'))
        <div class="section__container pt-30px pb-0">
            <div class="alert alert-success" style="max-width: 800px; margin-inline: auto; text-align: center;">
                <i class="ri-checkbox-circle-line"></i> {{ session('sucesso') }}
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="section__container pt-30px pb-0">
            <div class="alert alert-danger" style="max-width: 800px; margin-inline: auto;">
                <i class="ri-error-warning-line"></i> Verifique os campos assinalados abaixo.
            </div>
        </div>
    @endif

    <section class="section__container pt-30px pb-50px" id="reserva">
        <form method="POST" action="{{ '/fazer-reserva' }}" id="formReserva">
            @csrf
            @method('POST')

            <div class="row gy-4" style="max-width: 1100px; margin-inline: auto;">

                {{-- COLUNA ESQUERDA: DADOS DA RESERVA --}}
                <div class="col-12 col-lg-7">

                    {{-- 1. VEÍCULO --}}
                    <div class="card" style="padding: 1.75rem; margin-bottom: 1.5rem;">
                        <h4 class="card-title" style="margin-bottom: 1rem;">
                            <i class="ri-car-line" style="color: var(--primary-color);"></i> 1. Escolha o Veículo
                        </h4>

                        <div class="row gy-2">
                            <div class="col-12">
                                <label class="form-label">Veículo</label>
                                <select name="veiculo_id" id="veiculoSelect" class="form-control" >
                                    <option value="" disabled selected>Seleccione um veículo</option>
                                    @foreach ($veiculos as $veiculo)
                                        <option value="{{ $veiculo->id }}" {{$veiculo->id==('veiculo_id')?'selected':null}}>
                                            {{ $veiculo->marca ." | ". $veiculo->modelo}} — {{ $veiculo->preco_por_dia }} Kzs/dia
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- 2. DATAS E LOCAIS --}}
                    <div class="card" style="padding: 1.75rem; margin-bottom: 1.5rem;">
                        <h4 class="card-title" style="margin-bottom: 1rem;">
                            <i class="ri-calendar-line" style="color: var(--primary-color);"></i> 2. Datas e Locais
                        </h4>

                        <div class="row gy-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label">Data de recolha</label>
                                <input type="date" name="data_de_recolha" id="dataInicio" class="form-control"
                                    value="{{ old('data_de_recolha') }}" >
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Data de devolução</label>
                                <input type="date" name="data_de_devolucao" id="dataFim" class="form-control"
                                    value="{{ old('data_de_devolucao') }}" >
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Local de recolha</label>
                                <input type="text" name="local_de_recolha" class="form-control"
                                    placeholder="Ex: Aeroporto de Luanda" value="{{ old('local_de_recolha') }}" >
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Local de devolução</label>
                                <input type="text" name="local_de_devolucao" class="form-control"
                                    placeholder="Igual ao de recolha, se aplicável" value="{{ old('local_de_devolucao') }}">
                            </div>
                        </div>
                    </div>

                    {{-- 3. DADOS DO CONDUTOR --}}
                    <div class="card" style="padding: 1.75rem; margin-bottom: 1.5rem;">
                        <h4 class="card-title" style="margin-bottom: 1rem;">
                            <i class="ri-user-line" style="color: var(--primary-color);"></i> 3. Dados do Cliente
                        </h4>

                        <div class="row gy-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label">Nome completo</label>
                                <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" >
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Telefone</label>
                                <input type="tel" name="telefone" class="form-control"
                                    placeholder="+244 9xx xxx xxx" value="{{ old('telefone') }}" >
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" >
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Número da carta de condução</label>
                                <input type="text" name="carta_de_conducao" class="form-control" value="{{ old('carta_de_conducao') }}" >
                            </div>
                        </div>
                    </div>

                    {{-- 4. EXTRAS --}}
                    {{--<div class="card" style="padding: 1.75rem;">
                        <h4 class="card-title" style="margin-bottom: 1rem;">
                            <i class="ri-add-circle-line" style="color: var(--primary-color);"></i> 4. Extras (opcional)
                        </h4>

                        <div class="row gy-2">
                            <div class="col-12 col-md-6">
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem;">
                                    <input type="checkbox" name="extras[]" value="motorista" class="extra-check" data-preco="15000">
                                    Motorista incluído <span style="color: var(--text-light);">(+15.000 Kzs/dia)</span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem;">
                                    <input type="checkbox" name="extras[]" value="seguro_extra" class="extra-check" data-preco="8000">
                                    Seguro alargado <span style="color: var(--text-light);">(+8.000 Kzs/dia)</span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem;">
                                    <input type="checkbox" name="extras[]" value="cadeira_bebe" class="extra-check" data-preco="2000">
                                    Cadeira de bebé <span style="color: var(--text-light);">(+2.000 Kzs/dia)</span>
                                </label>
                            </div>

                        </div>
                    </div>--}}

                </div>

                {{-- COLUNA DIREITA: RESUMO DA RESERVA --}}
                <div class="col-12 col-lg-5">
                    <div class="card" style="padding: 1.75rem; position: sticky; top: 20px;">
                        {{--<h4 class="card-title" style="margin-bottom: 1rem;">
                            <i class="ri-file-list-3-line" style="color: var(--primary-color);"></i>
                        </h4>

                        <div id="resumoVazio" style="text-align: center; padding: 1.5rem 0; color: var(--text-light);">
                            <i class="ri-car-line" style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;"></i>
                            <p style="font-size: 0.9rem; margin: 0;">Seleccione um veículo e as datas para ver o resumo.</p>
                        </div>

                        <div id="resumoConteudo" style="display: none;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem; margin-bottom: 0.6rem;">
                                <span style="color: var(--text-light);">Veículo</span>
                                <span id="resumoVeiculo" style="font-weight: 600;">—</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem; margin-bottom: 0.6rem;">
                                <span style="color: var(--text-light);">Nº de dias</span>
                                <span id="resumoDias" style="font-weight: 600;">—</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem; margin-bottom: 0.6rem;">
                                <span style="color: var(--text-light);">Preço/dia</span>
                                <span id="resumoPrecoDia" style="font-weight: 600;">—</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.9rem; margin-bottom: 0.6rem;">
                                <span style="color: var(--text-light);">Extras</span>
                                <span id="resumoExtras" style="font-weight: 600;">—</span>
                            </div>
                            <hr style="border-color: var(--extra-light); margin: 1rem 0;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-weight: 600;">Total estimado</span>
                                <span id="resumoTotal" style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color);">0 Kzs</span>
                            </div>
                            <p style="font-size: 0.75rem; color: var(--text-light); margin-top: 0.5rem;">
                                Valor sujeito a confirmação final pela nossa equipa.
                            </p>
                        </div>--}}

                        <button type="submit" class="btn" style="width: 100%; justify-content: center; margin-top: 1.5rem;">
                            <i class="ri-checkbox-circle-line"></i> Confirmar Reserva
                        </button>

                        {{--<p style="font-size: 0.78rem; color: var(--text-light); text-align: center; margin-top: 0.75rem;">
                            Ao confirmar, aceita os nossos
                            <a href="{{ '' }}#" style="color: var(--primary-color);">Termos e Condições</a>.
                        </p>--}}
                    </div>
                </div>

            </div>
        </form>
    </section>

    {{-- CALL TO ACTION / AJUDA --}}
    <section class="section__container pt-30px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Prefere Reservar por Telefone?</h2>
        <p class="section__description" style="max-width: 580px; margin-inline: auto; margin-bottom: 2rem;">
            A nossa equipa está disponível para o ajudar a escolher o veículo certo e
            finalizar a sua reserva.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="tel:+244923000000" class="btn">
                <i class="ri-phone-line"></i> Ligar Agora
            </a>
            <a href="{{ url('/frota') }}" class="btn btn--outline">
                <i class="ri-car-line"></i> Ver Frota
            </a>
        </div>
    </section>


@endsection
