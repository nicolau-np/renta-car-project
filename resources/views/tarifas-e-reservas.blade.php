@extends('layouts.app')

@section('content')

    {{-- HERO DA PÁGINA --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Tarifas & Reservas</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto;">
            Escolha o plano ideal para a sua viagem. Sem taxas escondidas, sem surpresas — apenas
            transparência e qualidade ao melhor preço.
        </p>
    </section>

    {{-- FORMULÁRIO DE RESERVA --}}
    <section class="section__container pt-50px pb-50px" id="reserva">
        <h2 class="section__header">Faça a Sua Reserva</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 2.5rem;">
            Preencha os dados abaixo para verificar a disponibilidade e confirmar o seu aluguer.
        </p>

        <div style="max-width: 860px; margin-inline: auto;">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf

                        {{-- Alertas de validação --}}
                        {{--@if ($errors->any())
                            <div class="alert alert-danger alert-dismissible mb-4">
                                <span><i class="ri-error-warning-line" style="font-size: 1.2rem;"></i></span>
                                <div>
                                    <strong>Corrija os seguintes erros:</strong>
                                    <ul style="margin: 0.5rem 0 0; padding-left: 1.2rem;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <button type="button" class="btn-close"
                                    onclick="this.closest('.alert').remove()">×</button>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible mb-4">
                                <span><i class="ri-checkbox-circle-line" style="font-size: 1.2rem;"></i></span>
                                <div>{{ session('success') }}</div>
                                <button type="button" class="btn-close"
                                    onclick="this.closest('.alert').remove()">×</button>
                            </div>
                        @endif--}}

                        <div class="row">
                            {{-- Nome completo --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="nome">Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-user-line"></i></span>
                                    <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                        id="nome" name="nome" value="{{ old('nome') }}"
                                        placeholder="Ex: João Pedro Silva">
                                </div>
                                @error('nome')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Telefone --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="telefone">Telefone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-phone-line"></i></span>
                                    <input type="text" class="form-control @error('telefone') is-invalid @enderror"
                                        id="telefone" name="telefone" value="{{ old('telefone') }}"
                                        placeholder="Ex: +244 923 000 000">
                                </div>
                                @error('telefone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Ex: joao@email.com">
                                </div>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Veículo --}}
                            {{--<div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="carro_id">Veículo</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-car-line"></i></span>
                                    <select class="form-select @error('carro_id') is-invalid @enderror" id="carro_id"
                                        name="carro_id">
                                        <option value="">Selecione o veículo</option>
                                        @foreach ($carros as $carro)
                                            <option value="{{ $carro->id }}"
                                                {{ old('carro_id') == $carro->id ? 'selected' : '' }}>
                                                {{ $carro->marca . ' ' . $carro->modelo }} —
                                                {{ number_format($carro->preco_por_dia, 2, ',', '.') }} Kzs/dia
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('carro_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>--}}

                            {{-- Localização de retirada --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="local_retirada">Local de Retirada</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-map-pin-2-line"></i></span>
                                    <input type="text" class="form-control @error('local_retirada') is-invalid @enderror"
                                        id="local_retirada" name="local_retirada" value="{{ old('local_retirada') }}"
                                        placeholder="Ex: Luanda, Angola">
                                </div>
                                @error('local_retirada')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Localização de retorno --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="local_retorno">Local de Retorno</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-map-pin-line"></i></span>
                                    <input type="text" class="form-control @error('local_retorno') is-invalid @enderror"
                                        id="local_retorno" name="local_retorno" value="{{ old('local_retorno') }}"
                                        placeholder="Ex: Luanda, Angola">
                                </div>
                                @error('local_retorno')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Data de retirada --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="data_retirada">Data de Retirada</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                    <input type="datetime-local"
                                        class="form-control @error('data_retirada') is-invalid @enderror"
                                        id="data_retirada" name="data_retirada" value="{{ old('data_retirada') }}">
                                </div>
                                @error('data_retirada')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Data de retorno --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="data_retorno">Data de Retorno</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ri-calendar-check-line"></i></span>
                                    <input type="datetime-local"
                                        class="form-control @error('data_retorno') is-invalid @enderror" id="data_retorno"
                                        name="data_retorno" value="{{ old('data_retorno') }}">
                                </div>
                                @error('data_retorno')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Com motorista --}}
                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="com_motorista"
                                        name="com_motorista" value="1" {{ old('com_motorista') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="com_motorista">
                                        Pretendo motorista incluído no aluguer
                                    </label>
                                </div>
                            </div>

                            {{-- Observações --}}
                            <div class="col-12 mb-4">
                                <label class="form-label" for="observacoes">Observações (opcional)</label>
                                <textarea class="form-control" id="observacoes" name="observacoes"
                                    placeholder="Indique qualquer informação adicional sobre a reserva...">{{ old('observacoes') }}</textarea>
                                <span class="form-text">Máximo 500 caracteres.</span>
                            </div>

                            {{-- Resumo de custo --}}
                            <div class="col-12 mb-4" id="resumo-custo" style="display: none;">
                                <div class="alert alert-info">
                                    <span><i class="ri-information-line" style="font-size: 1.2rem;"></i></span>
                                    <div id="resumo-texto"></div>
                                </div>
                            </div>

                            {{-- Botão --}}
                            <div class="col-12">
                                <button type="submit" class="btn" style="width: 100%; padding: 0.9rem;">
                                    <i class="ri-calendar-check-line"></i> Confirmar Reserva
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- TABELA DE TARIFAS --}}
    <section class="deals pt-50px pb-50px" id="tarifas">
        <div class="section__container deals__container">
            <h2 class="section__header">Tabela de Tarifas</h2>
            <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 3rem;">
                Consulte os preços por categoria de veículo. Todos os valores são por dia e incluem
                seguro básico obrigatório.
            </p>

            <div class="row gy-4">
                {{--@foreach ($carros as $carro)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="height: 100%;">
                            <img class="card-img-top" src="{{ url('storage/carros/' . $carro->img) }}"
                                alt="{{ $carro->marca . ' ' . $carro->modelo }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <div class="deals__rating" style="margin-bottom: 0.75rem;">
                                    <span><i class="ri-star-fill"></i></span>
                                    <span><i class="ri-star-fill"></i></span>
                                    <span><i class="ri-star-fill"></i></span>
                                    <span><i class="ri-star-fill"></i></span>
                                    <span><i class="ri-star-line"></i></span>
                                </div>
                                <h4 class="card-title">{{ $carro->marca . ' ' . $carro->modelo }}</h4>

                                <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                    <div>
                                        <span><i class="ri-group-line"></i></span>
                                        {{ $carro->lugares . ' Lugares' }}
                                    </div>
                                    <div>
                                        <span><i class="ri-steering-2-line"></i></span>
                                        {{ $carro->caixa_automovel }}
                                    </div>
                                    <div>
                                        <span><i class="ri-speed-up-line"></i></span>
                                        {{ $carro->quilometros . ' km' }}
                                    </div>
                                    <div>
                                        <span><i class="ri-shield-check-line"></i></span>
                                        Seguro incluído
                                    </div>
                                </div>

                                <hr>--}}

                                {{-- Tabela de preços por período --}}
                                {{--<div style="margin-bottom: 1rem;">
                                    <p
                                        style="font-size: 0.82rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">
                                        TARIFAS POR PERÍODO
                                    </p>
                                    <div
                                        style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.4rem; font-size: 0.88rem;">
                                        <div style="color: var(--text-light);">1–3 dias</div>
                                        <div style="font-weight: 600; color: var(--text-dark); text-align: right;">
                                            {{ number_format($carro->preco_por_dia, 2, ',', '.') }} Kzs/dia
                                        </div>
                                        <div style="color: var(--text-light);">4–7 dias</div>
                                        <div style="font-weight: 600; color: var(--text-dark); text-align: right;">
                                            {{ number_format($carro->preco_por_dia * 0.9, 2, ',', '.') }} Kzs/dia
                                        </div>
                                        <div style="color: var(--text-light);">+7 dias</div>
                                        <div style="font-weight: 600; color: var(--text-dark); text-align: right;">
                                            {{ number_format($carro->preco_por_dia * 0.8, 2, ',', '.') }} Kzs/dia
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"
                                style="display: flex; align-items: center; justify-content: space-between;">
                                <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                    {{ number_format($carro->preco_por_dia, 2, ',', '.') }} Kzs
                                    <span
                                        style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                                </h3>
                                <a href="#reserva" class="card-link"
                                    style="display: flex; align-items: center; gap: 4px;">
                                    Reservar <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>

    {{-- PLANOS DE COBERTURA --}}
    <section class="section__container pt-50px pb-50px" id="cobertura">
        <h2 class="section__header">Planos de Cobertura</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 3rem;">
            Escolha o nível de protecção que melhor se adapta à sua viagem.
        </p>

        <div class="row gy-4" style="max-width: 1000px; margin-inline: auto;">

            {{-- Plano Básico --}}
            <div class="col-12 col-md-4">
                <div class="card" style="height: 100%; text-align: center;">
                    <div class="card-header" style="text-align: center;">
                        <span style="font-size: 2rem; color: #767268;"><i class="ri-shield-line"></i></span>
                        <h4 class="card-title" style="margin: 0.5rem 0 0;">Básico</h4>
                    </div>
                    <div class="card-body">
                        <p style="font-size: 2rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                            Incluído
                        </p>
                        <p style="color: var(--text-light); font-size: 0.85rem; margin-bottom: 1.5rem;">em todos os
                            alugueres</p>
                        <ul style="list-style: none; padding: 0; text-align: left; display: grid; gap: 0.6rem;">
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Seguro de responsabilidade civil
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Assistência em estrada 24h
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-close-line" style="color: #dc3545;"></i> Cobertura de danos próprios
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-close-line" style="color: #dc3545;"></i> Cobertura de roubo
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Plano Standard --}}
            <div class="col-12 col-md-4">
                <div class="card" style="height: 100%; text-align: center; border: 2px solid var(--primary-color);">
                    <div class="card-header"
                        style="text-align: center; background-color: var(--primary-color); color: white;">
                        <span style="font-size: 2rem; color: white;"><i class="ri-shield-check-line"></i></span>
                        <h4 class="card-title" style="margin: 0.5rem 0 0; color: white;">Standard</h4>
                        <span
                            style="font-size: 0.75rem; background: white; color: var(--primary-color);
                            padding: 2px 10px; border-radius: 1rem; font-weight: 600;">MAIS
                            POPULAR</span>
                    </div>
                    <div class="card-body">
                        <p style="font-size: 2rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                            +5.000 Kzs
                        </p>
                        <p style="color: var(--text-light); font-size: 0.85rem; margin-bottom: 1.5rem;">por dia adicional
                        </p>
                        <ul style="list-style: none; padding: 0; text-align: left; display: grid; gap: 0.6rem;">
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Tudo do plano Básico
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Cobertura de danos próprios
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Franquia reduzida a 50%
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-close-line" style="color: #dc3545;"></i> Cobertura de roubo
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Plano Premium --}}
            <div class="col-12 col-md-4">
                <div class="card" style="height: 100%; text-align: center;">
                    <div class="card-header" style="text-align: center;">
                        <span style="font-size: 2rem; color: goldenrod;"><i class="ri-shield-star-line"></i></span>
                        <h4 class="card-title" style="margin: 0.5rem 0 0;">Premium</h4>
                    </div>
                    <div class="card-body">
                        <p style="font-size: 2rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                            +12.000 Kzs
                        </p>
                        <p style="color: var(--text-light); font-size: 0.85rem; margin-bottom: 1.5rem;">por dia adicional
                        </p>
                        <ul style="list-style: none; padding: 0; text-align: left; display: grid; gap: 0.6rem;">
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Tudo do plano Standard
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Cobertura de roubo total
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Sem franquia
                            </li>
                            <li
                                style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.9rem;">
                                <i class="ri-check-line" style="color: #28a745;"></i> Veículo de substituição
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="deals pt-50px pb-50px" id="faq">
        <div class="section__container deals__container">
            <h2 class="section__header">Perguntas Frequentes</h2>
            <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 3rem;">
                Esclarecemos as dúvidas mais comuns sobre os nossos serviços de aluguer.
            </p>

            <div style="max-width: 780px; margin-inline: auto;" class="accordion" id="accordionFAQ">

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1"
                            data-bs-parent="#accordionFAQ" aria-expanded="false">
                            Quais documentos preciso para alugar um carro?
                        </button>
                    </div>
                    <div id="faq1" class="collapse">
                        <div class="accordion-body">
                            É necessário apresentar o Bilhete de Identidade (BI) ou Passaporte válido,
                            a Carta de Condução angolana ou internacional e um comprovativo de pagamento.
                            Para pagamentos por transferência bancária, é exigido o recibo da operação.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq2"
                            data-bs-parent="#accordionFAQ" aria-expanded="false">
                            Como funciona o cancelamento da reserva?
                        </button>
                    </div>
                    <div id="faq2" class="collapse">
                        <div class="accordion-body">
                            Cancelamentos com mais de 48 horas de antecedência são totalmente gratuitos.
                            Para cancelamentos entre 24h e 48h, é aplicada uma taxa de 20% sobre o valor total.
                            Cancelamentos com menos de 24h não têm direito a reembolso.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq3"
                            data-bs-parent="#accordionFAQ" aria-expanded="false">
                            Posso viajar para outras províncias com o veículo alugado?
                        </button>
                    </div>
                    <div id="faq3" class="collapse">
                        <div class="accordion-body">
                            Sim, é permitido viajar para outras províncias de Angola. No entanto, deve
                            informar previamente a nossa equipa sobre o itinerário. Viagens internacionais
                            não são permitidas sem autorização expressa por escrito.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq4"
                            data-bs-parent="#accordionFAQ" aria-expanded="false">
                            O combustível está incluído no preço?
                        </button>
                    </div>
                    <div id="faq4" class="collapse">
                        <div class="accordion-body">
                            O veículo é entregue com o depósito cheio e deve ser devolvido nas mesmas condições.
                            Caso a devolução seja efectuada com o depósito abaixo do nível de entrega,
                            será cobrada a diferença acrescida de uma taxa de serviço de 2.000 Kzs.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq5"
                            data-bs-parent="#accordionFAQ" aria-expanded="false">
                            Quais são as formas de pagamento aceites?
                        </button>
                    </div>
                    <div id="faq5" class="collapse">
                        <div class="accordion-body">
                            Aceitamos pagamento em numerário (Kwanzas), transferência bancária,
                            Multicaixa Express e cartão de débito/crédito. Para reservas online,
                            o pagamento pode ser efectuado por referência Multicaixa.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SCRIPT: cálculo de custo + accordion --}}
    <script>
        // Accordion
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-bs-target');
                const target = document.querySelector(targetId);
                if (!target) return;
                const isOpen = target.classList.contains('show');
                const parentId = btn.getAttribute('data-bs-parent');
                if (parentId) {
                    document.querySelectorAll(parentId + ' .collapse.show').forEach(el => {
                        el.classList.remove('show');
                        const h = document.querySelector(`[data-bs-target="#${el.id}"]`);
                        if (h) h.setAttribute('aria-expanded', 'false');
                    });
                }
                target.classList.toggle('show', !isOpen);
                btn.setAttribute('aria-expanded', !isOpen);
            });
        });


    </script>

@endsection
