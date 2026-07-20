@extends('layouts.app')

@section('content')

    {{-- HERO DA PÁGINA --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Modificar Reserva</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto;">
            Precisa de alterar as datas, o veículo ou os dados da sua reserva? Introduza o
            código de reserva abaixo e faça as alterações necessárias em poucos passos.
        </p>
    </section>

    {{-- MENSAGENS DE FEEDBACK --}}
    @if (session('sucesso'))
        <div class="section__container pt-30px pb-0">
            <div class="alert alert-success" style="max-width: 640px; margin-inline: auto; text-align: center;">
                <i class="ri-checkbox-circle-line"></i> {{ session('sucesso') }}
            </div>
        </div>
    @endif

    @if (session('erro'))
        <div class="section__container pt-30px pb-0">
            <div class="alert alert-danger" style="max-width: 640px; margin-inline: auto; text-align: center;">
                <i class="ri-error-warning-line"></i> {{ session('erro') }}
            </div>
        </div>
    @endif

    {{-- PASSO 1: PROCURAR RESERVA --}}
    <section class="section__container pt-50px pb-30px" id="procurar-reserva">
        <div class="card" style="max-width: 640px; margin-inline: auto; padding: 2rem;" id="cardProcurar">
            <h2 class="section__header" style="margin-bottom: 0.5rem; text-align: left;">
                <i class="ri-search-line" style="color: var(--primary-color);"></i> Localizar a Minha Reserva
            </h2>
            <p class="section__description" style="text-align: left; margin-bottom: 1.5rem;">
                O código de reserva foi enviado para o seu e-mail ou telefone no momento
                da confirmação.
            </p>

            <form method="POST" action="{{ '' }}" id="formProcurar">
                @csrf
                <div class="row gy-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Código da reserva</label>
                        <input type="text" name="codigo_reserva" class="form-control"
                            placeholder="Ex: RC-2026-00841" required value="{{ old('codigo_reserva') }}">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Telefone ou e-mail usado na reserva</label>
                        <input type="text" name="contacto" class="form-control"
                            placeholder="+244 9xx xxx xxx ou e-mail" required value="{{ old('contacto') }}">
                    </div>
                </div>
                <div style="margin-top: 1.5rem; text-align: center;">
                    <button type="submit" class="btn">
                        <i class="ri-search-line"></i> Localizar Reserva
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- PASSO 2: DETALHES E EDIÇÃO DA RESERVA --}}
    {{-- Esta secção só é exibida quando a reserva é encontrada com sucesso (variável $reserva vinda do controller) --}}
    @isset($reserva)
    <section class="section__container pt-20px pb-50px" id="editar-reserva">
        <div class="card" style="max-width: 760px; margin-inline: auto; padding: 2rem;">

            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; flex-wrap: wrap; gap: 0.5rem;">
                <h2 class="section__header" style="margin: 0; text-align: left;">
                    <i class="ri-file-list-3-line" style="color: var(--primary-color);"></i>
                    Reserva {{ $reserva->codigo }}
                </h2>
                <span class="badge" style="background: #E1F5EE; color: #0F6E56; font-size: 0.8rem; padding: 4px 12px; border-radius: 999px;">
                    {{ $reserva->estado ?? 'Confirmada' }}
                </span>
            </div>

            <div class="deals__card__grid" style="margin-bottom: 1.5rem;">
                <div><span><i class="ri-car-line"></i></span> {{ $reserva->veiculo->nome ?? 'Veículo' }}</div>
                <div><span><i class="ri-calendar-line"></i></span> {{ $reserva->data_inicio ?? '--' }} a {{ $reserva->data_fim ?? '--' }}</div>
                <div><span><i class="ri-map-pin-line"></i></span> {{ $reserva->local_recolha ?? '--' }}</div>
                <div><span><i class="ri-price-tag-3-line"></i></span> {{ $reserva->valor_total ?? '--' }} Kzs</div>
            </div>

            <hr style="border-color: var(--extra-light); margin: 1.5rem 0;">

            <h4 class="card-title" style="margin-bottom: 1rem;">Alterar Dados da Reserva</h4>

            <form method="POST" action="{{ route('reserva.actualizar', $reserva->id) }}">
                @csrf
                @method('PUT')

                <div class="row gy-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Data de recolha</label>
                        <input type="date" name="data_inicio" class="form-control"
                            value="{{ old('data_inicio', $reserva->data_inicio) }}" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Data de devolução</label>
                        <input type="date" name="data_fim" class="form-control"
                            value="{{ old('data_fim', $reserva->data_fim) }}" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Local de recolha</label>
                        <input type="text" name="local_recolha" class="form-control"
                            value="{{ old('local_recolha', $reserva->local_recolha) }}" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Local de devolução</label>
                        <input type="text" name="local_devolucao" class="form-control"
                            value="{{ old('local_devolucao', $reserva->local_devolucao) }}" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Veículo</label>
                        <select name="veiculo_id" class="form-control">
                            @foreach ($veiculosDisponiveis ?? [] as $veiculo)
                                <option value="{{ $veiculo->id }}"
                                    {{ ($reserva->veiculo_id ?? null) == $veiculo->id ? 'selected' : '' }}>
                                    {{ $veiculo->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Observações (opcional)</label>
                        <textarea name="observacoes" class="form-control" rows="3">{{ old('observacoes', $reserva->observacoes) }}</textarea>
                    </div>
                </div>

                <div style="margin-top: 1.5rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <button type="submit" class="btn">
                        <i class="ri-save-line"></i> Guardar Alterações
                    </button>
                    <button type="button" class="btn btn--outline" data-bs-toggle="modal" data-bs-target="#modalCancelar">
                        <i class="ri-close-circle-line"></i> Cancelar Reserva
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- MODAL DE CONFIRMAÇÃO DE CANCELAMENTO --}}
    <div class="modal fade" id="modalCancelar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 12px;">
                <div class="modal-body" style="padding: 2rem; text-align: center;">
                    <i class="ri-error-warning-line" style="font-size: 2.5rem; color: #A32D2D;"></i>
                    <h4 style="margin: 1rem 0 0.5rem;">Cancelar esta reserva?</h4>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1.5rem;">
                        Esta acção não pode ser revertida. Poderão aplicar-se condições de
                        cancelamento consoante a antecedência.
                    </p>
                    <form method="POST" action="{{ route('reserva.cancelar', $reserva->id) }}">
                        @csrf
                        @method('DELETE')
                        <div style="display: flex; gap: 1rem; justify-content: center;">
                            <button type="button" class="btn btn--outline" data-bs-dismiss="modal">Voltar</button>
                            <button type="submit" class="btn" style="background: #A32D2D; border-color: #A32D2D;">
                                Sim, Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endisset

    {{-- CALL TO ACTION / AJUDA --}}
    <section class="section__container pt-30px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Precisa de Ajuda com a Sua Reserva?</h2>
        <p class="section__description" style="max-width: 580px; margin-inline: auto; margin-bottom: 2rem;">
            A nossa equipa de apoio ao cliente está disponível para o ajudar a alterar,
            confirmar ou cancelar a sua reserva.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="tel:+244923000000" class="btn">
                <i class="ri-phone-line"></i> Ligar Agora
            </a>
            <a href="{{ '' }}#procurar-reserva" class="btn btn--outline">
                <i class="ri-search-line"></i> Localizar Reserva
            </a>
        </div>
    </section>

@endsection
