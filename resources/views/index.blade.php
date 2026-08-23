@extends('layouts.app')
@section('content')
<section class="header__form">
    <form action="/">
        <div class="input__group">
            <label for="location">Localização da retirada e retorno</label>
            <input type="text" name="location" id="location" placeholder="Namibe, Angola" />
        </div>
        <div class="input__group">
            <label for="start">Data de retirada</label>
            <input type="text" name="start" id="start" placeholder="16 de Agosto, 10:00 AM" />
        </div>
        <div class="input__group">
            <label for="stop">Data de retorno</label>
            <input type="text" name="stop" id="stop" placeholder="18 de Agosto, 10:00 PM" />
        </div>
        <button class="btn">Pesquisa <i class="ri-search-line"></i></button>
    </form>
</section>

<div class="video-container">
    <video id="videoComercial" preload="metadata">
        <source src="{{ asset('assets/video/Vídeo comercial concessionária - CarHouse Toyota, Lexus e Hyundai.mp4') }}" type="video/mp4">
        O seu navegador não suporta o elemento de vídeo.
    </video>
    <div class="legenda">UPCOMING CARS</div>
</div>

<section class="section__container about__container pb-50px" id="about">
    <h2 class="section__header">Como Funciona?</h2>
    <p class="section__description">
        Alugar um carro conosco é simples! Escolha seu veículo, defina as datas e conclua sua reserva. Nós cuidamos
        do resto, garantindo um início tranquilo para sua viagem.
    </p>
    <div class="about__grid">
        <div class="about__card">
            <span><i class="ri-map-pin-2-fill"></i></span>
            <h4>Escolha a localização</h4>
            <p>
                Selecione entre uma variedade de locais de retirada que melhor atendem às suas
                necessidades, seja perto de casa, do trabalho ou do aeroporto.
            </p>
        </div>
        <div class="about__card">
            <span><i class="ri-calendar-event-fill"></i></span>
            <h4>Pick-up Date</h4>
            <p>
                Escolha a data e a hora exatas para a retirada do seu carro, garantindo que
                ele esteja pronto quando você precisar.
            </p>
        </div>
        <div class="about__card">
            <span><i class="ri-roadster-fill"></i></span>
            <h4>Reserve o seu carro</h4>
            <p>
                Conclua sua reserva com apenas alguns cliques e prepararemos seu
                veículo para garantir uma retirada sem complicações.
            </p>
        </div>
    </div>
</section>

<section class="deals mb-2 pt-50px pb-50px" id="deals">
    <div class="section__container deals__container">
        <h2 class="section__header">Ofertas de aluguer de carros mais populares</h2>
        <p class="section__description">
            Explore nossas melhores ofertas de aluguel de carros, cuidadosamente selecionadas para oferecer a você o
            melhor
            valor e experiência. Reserve agora e dirija seu veículo favorito por uma
            tarifa incrível!
        </p>
        <!--<div class="deals__tabs">
                @foreach (config('constants.CATEGORIAS_DE_CARROS') as $item)
                    <button class="btn" data-id="Tesla">{{ $item }}</button>
                @endforeach
            </div>-->


        <div id="Tesla" class="tab__content active">

            <div class="deals__card">
                <img src="{{ asset('assets/img/deals-15.png') }}" alt="deals" />
                <div class="deals__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                    <span>(550)</span>
                </div>
                <h4>Hyundai I20</h4>
                <div class="deals__card__grid">
                    <div>
                        <span><i class="ri-group-line"></i></span> {{ '4 Lugares' }}
                    </div>
                    <div>
                        <span><i class="ri-steering-2-line"></i></span> {{ 'Automática' }}
                    </div>
                    <div>
                        <span><i class="ri-speed-up-line"></i></span> {{ '100 km' }}
                    </div>

                </div>
                <hr />
                <div class="deals__card__footer">
                    <h3>{{ '20.000,00' }} Kzs<span>/Por Dia</span></h3>
                    <a href="#">
                        Alugue agora
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>

            <div class="deals__card">
                <img src="{{ asset('assets/img/deals-8.png') }}" alt="deals" />
                <div class="deals__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                    <span>(550)</span>
                </div>
                <h4>Hyundai I20</h4>
                <div class="deals__card__grid">
                    <div>
                        <span><i class="ri-group-line"></i></span> {{ '4 Lugares' }}
                    </div>
                    <div>
                        <span><i class="ri-steering-2-line"></i></span> {{ 'Automática' }}
                    </div>
                    <div>
                        <span><i class="ri-speed-up-line"></i></span> {{ '100 km' }}
                    </div>

                </div>
                <hr />
                <div class="deals__card__footer">
                    <h3>{{ '20.000,00' }} Kzs<span>/Por Dia</span></h3>
                    <a href="#">
                        Alugue agora
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>


            <div class="deals__card">
                <img src="{{ asset('assets/img/deals-5.png') }}" alt="deals" />
                <div class="deals__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                    <span>(550)</span>
                </div>
                <h4>Hyundai I20</h4>
                <div class="deals__card__grid">
                    <div>
                        <span><i class="ri-group-line"></i></span> {{ '4 Lugares' }}
                    </div>
                    <div>
                        <span><i class="ri-steering-2-line"></i></span> {{ 'Automática' }}
                    </div>
                    <div>
                        <span><i class="ri-speed-up-line"></i></span> {{ '100 km' }}
                    </div>

                </div>
                <hr />
                <div class="deals__card__footer">
                    <h3>{{ '20.000,00' }} Kzs<span>/Por Dia</span></h3>
                    <a href="#">
                        Alugue agora
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>

        </div>


    </div>
</section>

<section class="choose__container" id="choose">
    <div class="choose__image">
        <img src="{{ asset('assets/img/Hyundai.png') }}" alt="choose" />
    </div>
    <div class="choose__content">
        <h2 class="section__header">Por que nos escolher</h2>
        <p class="section__description">
            Descubra a diferença com o nosso serviço de aluguel de carros. Oferecemos veículos
            confiáveis, atendimento ao cliente excepcional e preços competitivos para
            garantir uma experiência de aluguel perfeita.
        </p>
        <div class="choose__grid">
            <div class="choose__card">
                <span><i class="ri-customer-service-line"></i></span>
                <div>
                    <h4>Suporte ao Cliente</h4>
                    <p>Nossa equipe de suporte dedicada está disponível para ajudar você 24 horas por dia, 7 dias
                        por semana.</p>
                </div>
            </div>
            <div class="choose__card">
                <span><i class="ri-map-pin-line"></i></span>
                <div>
                    <h4>Muitos locais</h4>
                    <p>
                        Convenient pick-up and drop-off locations to suit your travel
                        needs.
                    </p>
                </div>
            </div>
            <div class="choose__card">
                <span><i class="ri-wallet-line"></i></span>
                <div>
                    <h4>Melhor Preço</h4>
                    <p>Aproveite tarifas competitivas e ótimo valor em cada aluguer.</p>
                </div>
            </div>
            <div class="choose__card">
                <span><i class="ri-user-star-line"></i></span>
                <div>
                    <h4>Motorista experiente</h4>
                    <p>Motoristas confiáveis e profissionais disponíveis mediante solicitação.</p>
                </div>
            </div>
            <div class="choose__card">
                <span><i class="ri-verified-badge-line"></i></span>
                <div>
                    <h4>Marcas Verificadas</h4>
                    <p>Escolha entre marcas de carros confiáveis e bem conservadas.</p>
                </div>
            </div>
            <div class="choose__card">
                <span><i class="ri-calendar-close-line"></i></span>
                <div>
                    <h4>Cancelamentos Gratuitos</h4>
                    <p>Reservas flexíveis com opções de cancelamento gratuito.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subscribe__container">
    <div class="subscribe__image">
        <img src="{{ asset('assets/img/JETOUR-X70.png') }}" alt="subscribe" />
    </div>
    <div class="subscribe__content">
        <h2 class="section__header">
            Assine para receber as últimas atualizações sobre aluguel de carros
        </h2>
        <p class="section__description">
            Fique por dentro! Assine para receber as últimas ofertas de aluguel de carros,
            ofertas exclusivas e atualizações diretamente na sua caixa de entrada. Não perca
            promoções especiais e as novidades da nossa frota.
        </p>
        <form action="/">
            <input type="text" placeholder="Your Email" />
            <button class="btn">Inscrever-se</button>
        </form>
    </div>
</section>

<section class="section__container client__container" id="client">
    <h2 class="section__header">O que as pessoas dizem sobre nós?</h2>
    <p class="section__description">
        Descubra por que nossos clientes adoram alugar conosco! Leia avaliações e depoimentos reais
        para ver como oferecemos um serviço excepcional.
    </p>
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="client__card">
                    <div class="client__details">
                        <img src="{{ asset('assets/img/mulher.png') }}" alt="client" />
                        <div>
                            <h4>Maria Januário</h4>
                            <div class="client__rating">
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Tive uma experiência incrível alugando um carro com este serviço. O
                        processo de reserva foi rápido e fácil, e o carro estava em perfeitas
                        condições. Recomendo muito!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="client__card">
                    <div class="client__details">
                        <img src="{{ asset('assets/img/Joao.jpg') }}" alt="client" />
                        <div>
                            <h4>Miguel Ricardo</h4>
                            <div class="client__rating">
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        O suporte ao cliente foi excelente! Eles me ajudaram com todas as minhas
                        dúvidas e me senti confiante em relação à minha reserva. Com certeza
                        alugarei com eles novamente.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="client__card">
                    <div class="client__details">
                        <img src="{{ asset('assets/img/homem.png') }}" alt="client" />
                        <div>
                            <h4>Pedro António</h4>
                            <div class="client__rating">
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        Preços acessíveis e ótima seleção de veículos! Encontrei
                        exatamente o que precisava, e o processo de retirada e devolução foi
                        tranquilo. Muito satisfeito com meu aluguel.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="client__card">
                    <div class="client__details">
                        <img src="{{ asset('assets/img/Joao.jpg') }}" alt="client" />
                        <div>
                            <h4>João Pedro</h4>
                            <div class="client__rating">
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        A flexibilidade dos cancelamentos gratuitos tornou minha viagem tranquila.
                        Acabei mudando meus planos e não foi difícil ajustar minha
                        reserva. Ótimo serviço no geral!
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="client__card">
                    <div class="client__details">
                        <img src="{{ asset('assets/img/client-5.jpg') }}" alt="client" />
                        <div>
                            <h4>Wilson Tudilu</h4>
                            <div class="client__rating">
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-fill"></i></span>
                                <span><i class="ri-star-line"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>
                        O carro que aluguei era de primeira qualidade, e o motorista era muito
                        experiente. Tornou minha viagem muito mais agradável. Vou
                        usá-los novamente na próxima vez!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
