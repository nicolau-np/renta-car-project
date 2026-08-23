@extends('layouts.app')

@section('content')

    {{-- HERO DA PÁGINA --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Sobre Nós</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto;">
            Conheça a nossa história, a nossa missão e o compromisso que temos em oferecer
            a melhor experiência de aluguer de veículos em Angola.
        </p>
    </section>

    {{-- ESTATÍSTICAS DA EMPRESA --}}
    <section class="section__container pt-50px pb-20px">
        <div class="row gy-3" style="max-width: 860px; margin-inline: auto; text-align: center;">
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">10+</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Anos de experiência</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">32+</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Veículos na frota</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">5.000+</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Clientes satisfeitos</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">24h</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Assistência em estrada</p>
                </div>
            </div>
        </div>
    </section>

    {{-- A NOSSA HISTÓRIA --}}
    <section class="section__container pt-30px pb-50px">
        <div class="row align-items-center" style="max-width: 1000px; margin-inline: auto;">
            <div class="col-12 col-lg-6">
                <div style="height: 280px; background: var(--extra-light); border-radius: 12px;
                    display: flex; align-items: center; justify-content: center; overflow: hidden;">
                    {{-- Substituir pela imagem real: --}}
                    {{-- <img src="{{ url('storage/sobre/equipa.jpg') }}" alt="A nossa equipa"
                        style="width: 100%; height: 100%; object-fit: cover;"> --}}
                    <i class="ri-building-2-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                </div>
            </div>
            <div class="col-12 col-lg-6" style="padding-top: 1.5rem;">
                <h2 class="section__header" style="text-align: left;">A Nossa História</h2>
                <p class="section__description" style="text-align: left; margin: 0;">
                    Nascemos com um objectivo simples: tornar o aluguer de veículos em Angola
                    mais fácil, transparente e acessível. Ao longo dos anos, crescemos de uma
                    pequena frota para uma vasta selecção de veículos, sempre mantendo o mesmo
                    compromisso com a qualidade e a satisfação dos nossos clientes.
                    Hoje, somos reconhecidos pela nossa fiabilidade e pelo cuidado que
                    colocamos em cada detalhe, desde a manutenção dos veículos até ao
                    atendimento personalizado.
                </p>
            </div>
        </div>
    </section>

    {{-- MISSÃO, VISÃO E VALORES --}}
    <section class="deals pt-30px pb-50px" style="background-color: var(--extra-light, #f1f2ff);">
        <div class="section__container deals__container">
            <h2 class="section__header">Missão, Visão e Valores</h2>
            <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 2rem;">
                Os princípios que orientam cada decisão e cada viagem que proporcionamos.
            </p>

            <div class="row gy-4">
                <div class="col-12 col-md-4">
                    <div class="card" style="height: 100%; padding: 1.5rem; text-align: center;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: #E6F1FB;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <i class="ri-flag-line" style="font-size: 1.6rem; color: #185FA5;"></i>
                        </div>
                        <h4 class="card-title">Missão</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            Oferecer soluções de mobilidade seguras, cómodas e acessíveis,
                            adaptadas às necessidades de cada cliente.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card" style="height: 100%; padding: 1.5rem; text-align: center;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: #EEEDFE;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <i class="ri-eye-line" style="font-size: 1.6rem; color: #3C3489;"></i>
                        </div>
                        <h4 class="card-title">Visão</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            Ser a empresa de aluguer de veículos de referência em Angola,
                            reconhecida pela excelência e confiança.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card" style="height: 100%; padding: 1.5rem; text-align: center;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: #E1F5EE;
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                            <i class="ri-heart-line" style="font-size: 1.6rem; color: #0F6E56;"></i>
                        </div>
                        <h4 class="card-title">Valores</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            Transparência, respeito pelo cliente, segurança e melhoria
                            contínua em tudo o que fazemos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PORQUE ESCOLHER-NOS --}}
    <section class="section__container pt-50px pb-50px">
        <h2 class="section__header">Porque Escolher-nos</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 2rem;">
            Razões que fazem a diferença na sua experiência connosco.
        </p>

        <div class="row gy-4" style="max-width: 1000px; margin-inline: auto;">
            <div class="col-12 col-md-6">
                <div style="display: flex; gap: 1rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 50%; background: #E6F1FB;
                        display: flex; align-items: center; justify-content: center;">
                        <i class="ri-shield-check-line" style="color: #185FA5;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 0.3rem;">Veículos Inspeccionados</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            Todos os veículos passam por inspecções regulares para garantir a
                            sua segurança em cada viagem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div style="display: flex; gap: 1rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 50%; background: #FAEEDA;
                        display: flex; align-items: center; justify-content: center;">
                        <i class="ri-customer-service-2-line" style="color: #854F0B;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 0.3rem;">Assistência 24 Horas</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            A nossa equipa está disponível a qualquer hora para apoiar em
                            caso de imprevistos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div style="display: flex; gap: 1rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 50%; background: #EEEDFE;
                        display: flex; align-items: center; justify-content: center;">
                        <i class="ri-price-tag-3-line" style="color: #3C3489;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 0.3rem;">Preços Transparentes</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            Sem custos escondidos. O preço apresentado é o preço que paga.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div style="display: flex; gap: 1rem; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 50%; background: #E1F5EE;
                        display: flex; align-items: center; justify-content: center;">
                        <i class="ri-car-line" style="color: #0F6E56;"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0 0 0.3rem;">Ampla Selecção</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">
                            Desde económicos a veículos de luxo, temos a opção certa para
                            cada ocasião.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EQUIPA --}}
    <section class="deals pt-30px pb-50px">
        <div class="section__container deals__container">
            <h2 class="section__header">A Nossa Equipa</h2>
            <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 2rem;">
                Profissionais dedicados a garantir a melhor experiência para si.
            </p>

            <div class="row gy-4">
                {{-- MEMBRO 1 --}}
                <div class="col-12 col-md-4">
                    <div class="card" style="text-align: center; padding: 1.5rem;">
                        <div style="width: 90px; height: 90px; border-radius: 50%; background: var(--extra-light);
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; overflow: hidden;">
                            {{-- <img src="{{ url('storage/equipa/nome.jpg') }}" style="width:100%; height:100%; object-fit:cover;"> --}}
                            <i class="ri-user-line" style="font-size: 2.2rem; color: var(--primary-color); opacity: 0.4;"></i>
                        </div>
                        <h4 class="card-title" style="margin-bottom: 0.2rem;">Nome do Colaborador</h4>
                        <p style="color: var(--text-light); font-size: 0.85rem; margin: 0;">Director Geral</p>
                    </div>
                </div>
                {{-- MEMBRO 2 --}}
                <div class="col-12 col-md-4">
                    <div class="card" style="text-align: center; padding: 1.5rem;">
                        <div style="width: 90px; height: 90px; border-radius: 50%; background: var(--extra-light);
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; overflow: hidden;">
                            <i class="ri-user-line" style="font-size: 2.2rem; color: var(--primary-color); opacity: 0.4;"></i>
                        </div>
                        <h4 class="card-title" style="margin-bottom: 0.2rem;">Nome do Colaborador</h4>
                        <p style="color: var(--text-light); font-size: 0.85rem; margin: 0;">Gestora de Frota</p>
                    </div>
                </div>
                {{-- MEMBRO 3 --}}
                <div class="col-12 col-md-4">
                    <div class="card" style="text-align: center; padding: 1.5rem;">
                        <div style="width: 90px; height: 90px; border-radius: 50%; background: var(--extra-light);
                            display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; overflow: hidden;">
                            <i class="ri-user-line" style="font-size: 2.2rem; color: var(--primary-color); opacity: 0.4;"></i>
                        </div>
                        <h4 class="card-title" style="margin-bottom: 0.2rem;">Nome do Colaborador</h4>
                        <p style="color: var(--text-light); font-size: 0.85rem; margin: 0;">Apoio ao Cliente</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Pronto para a sua próxima viagem?</h2>
        <p class="section__description" style="max-width: 580px; margin-inline: auto; margin-bottom: 2rem;">
            Explore a nossa frota e reserve o veículo ideal para si em poucos minutos.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ url('/frota') }}" class="btn">
                <i class="ri-car-line"></i> Ver Frota
            </a>
            <a href="tel:+244923000000" class="btn btn--outline">
                <i class="ri-phone-line"></i> Ligar Agora
            </a>
        </div>
    </section>

@endsection
