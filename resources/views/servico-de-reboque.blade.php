@extends('layouts.app')

@section('content')

    {{-- HERO DA PÁGINA --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Serviço de Reboque</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto;">
            Assistência rápida e segura em caso de avaria ou acidente. Estamos disponíveis
            24 horas por dia, 7 dias por semana, em toda a província.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 1.5rem;">
            <a href="tel:+244923000000" class="btn">
                <i class="ri-phone-line"></i> Ligar Agora
            </a>
            <a href="{{ '' }}#pedido" class="btn btn--outline">
                <i class="ri-truck-line"></i> Pedir Reboque
            </a>
        </div>
    </section>

    {{-- ESTATÍSTICAS DO SERVIÇO --}}
    <section class="section__container pt-50px pb-20px">
        <div class="row gy-3" style="max-width: 860px; margin-inline: auto; text-align: center;">
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">24h</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Disponibilidade</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">±30min</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Tempo médio de resposta</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">18</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Municípios cobertos</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">6</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Viaturas de reboque</p>
                </div>
            </div>
        </div>
    </section>

    {{-- TIPOS DE SERVIÇO --}}
    <section class="deals pt-30px pb-50px" id="servicos">
        <div class="section__container deals__container">
            <h2 class="section__header">Os Nossos Serviços de Reboque</h2>
            <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 2rem;">
                Escolha o tipo de assistência mais adequado à sua situação.
            </p>

            <div class="row gy-4" id="servicoGrid">

                {{-- CARD: Reboque de Emergência --}}
                <div class="col-12 col-md-6 col-lg-4 servico-item">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #FDECEC; color: #A32D2D; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Urgente</span>
                                <i class="ri-alarm-warning-line" style="font-size: 1.5rem; color: #A32D2D;"></i>
                            </div>
                            <h4 class="card-title">Reboque de Emergência</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                                Para avarias inesperadas, acidentes ou pneus furados. A nossa equipa
                                desloca-se de imediato até si, onde quer que esteja.
                            </p>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-time-line"></i></span> Resposta imediata</div>
                                <div><span><i class="ri-map-pin-line"></i></span> Cobertura provincial</div>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                15.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/base</span>
                            </h3>
                            <a href="{{ '' }}#pedido" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Pedir Agora <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD: Reboque Programado --}}
                <div class="col-12 col-md-6 col-lg-4 servico-item">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #E6F1FB; color: #185FA5; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Agendado</span>
                                <i class="ri-calendar-check-line" style="font-size: 1.5rem; color: #185FA5;"></i>
                            </div>
                            <h4 class="card-title">Reboque Programado</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                                Marque com antecedência o transporte da sua viatura para a oficina,
                                stand ou revisão, na data e hora que lhe forem convenientes.
                            </p>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-calendar-line"></i></span> Data à sua escolha</div>
                                <div><span><i class="ri-price-tag-3-line"></i></span> Preço fixo</div>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                10.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/base</span>
                            </h3>
                            <a href="{{ '' }}#pedido" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Agendar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD: Reboque de Longa Distância --}}
                <div class="col-12 col-md-6 col-lg-4 servico-item">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #EEEDFE; color: #3C3489; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Longa distância</span>
                                <i class="ri-route-line" style="font-size: 1.5rem; color: #3C3489;"></i>
                            </div>
                            <h4 class="card-title">Reboque Interprovincial</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                                Transporte da sua viatura entre municípios ou províncias, com
                                acompanhamento e seguro de transporte incluído.
                            </p>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-shield-check-line"></i></span> Seguro incluído</div>
                                <div><span><i class="ri-road-map-line"></i></span> Preço por km</div>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                350 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/km</span>
                            </h3>
                            <a href="{{ '' }}#pedido" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Solicitar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>{{-- /row --}}
        </div>
    </section>

    {{-- COMO FUNCIONA --}}
    <section class="section__container pt-30px pb-50px" style="background-color: var(--extra-light, #f1f2ff);">
        <h2 class="section__header">Como Funciona</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 2rem;">
            Em apenas 4 passos simples, a sua viatura estará a caminho de um local seguro.
        </p>
        <div class="row gy-4" style="max-width: 960px; margin-inline: auto; text-align: center;">
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.5rem 1rem; height: 100%;">
                    <i class="ri-phone-line" style="font-size: 2rem; color: var(--primary-color);"></i>
                    <h4 style="font-size: 1rem; margin: 0.75rem 0 0.35rem;">1. Contacte-nos</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Ligue ou preencha o formulário de pedido.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.5rem 1rem; height: 100%;">
                    <i class="ri-map-pin-user-line" style="font-size: 2rem; color: var(--primary-color);"></i>
                    <h4 style="font-size: 1rem; margin: 0.75rem 0 0.35rem;">2. Partilhe a localização</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Indique onde se encontra a viatura.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.5rem 1rem; height: 100%;">
                    <i class="ri-truck-line" style="font-size: 2rem; color: var(--primary-color);"></i>
                    <h4 style="font-size: 1rem; margin: 0.75rem 0 0.35rem;">3. Aguarde a equipa</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">O reboque desloca-se até si.</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.5rem 1rem; height: 100%;">
                    <i class="ri-checkbox-circle-line" style="font-size: 2rem; color: var(--primary-color);"></i>
                    <h4 style="font-size: 1rem; margin: 0.75rem 0 0.35rem;">4. Viatura em segurança</h4>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Entrega no destino combinado.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FORMULÁRIO DE PEDIDO --}}
    <section class="section__container pt-50px pb-50px" id="pedido">
        <div class="card" style="max-width: 640px; margin-inline: auto; padding: 2rem;">
            <h2 class="section__header" style="margin-bottom: 0.5rem;">Solicitar Reboque</h2>
            <p class="section__description" style="margin-bottom: 1.5rem;">
                Preencha os dados abaixo e a nossa equipa entrará em contacto o mais rápido possível.
            </p>

            <form method="POST" action="{{ '' }}">
                @csrf
                <div class="row gy-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label">Nome completo</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Telefone</label>
                        <input type="tel" name="telefone" class="form-control" placeholder="+244 9xx xxx xxx" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Localização actual da viatura</label>
                        <input type="text" name="localizacao" class="form-control" placeholder="Ex: Rua, bairro, município" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Tipo de serviço</label>
                        <select name="tipo_servico" class="form-control" required>
                            <option value="emergencia">Reboque de Emergência</option>
                            <option value="programado">Reboque Programado</option>
                            <option value="longa_distancia">Reboque Interprovincial</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label">Marca e modelo da viatura</label>
                        <input type="text" name="veiculo" class="form-control" placeholder="Ex: Toyota Hilux">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Descrição do problema (opcional)</label>
                        <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <div style="margin-top: 1.5rem; text-align: center;">
                    <button type="submit" class="btn">
                        <i class="ri-truck-line"></i> Enviar Pedido
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Precisa de Ajuda Agora?</h2>
        <p class="section__description" style="max-width: 580px; margin-inline: auto; margin-bottom: 2rem;">
            A nossa linha de emergência está disponível 24 horas por dia. Não fique
            à espera, ligue já.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="tel:+244923000000" class="btn">
                <i class="ri-phone-line"></i> +244 923 000 000
            </a>
            <a href="{{ '' }}#pedido" class="btn btn--outline">
                <i class="ri-file-list-3-line"></i> Preencher Formulário
            </a>
        </div>
    </section>

@endsection
