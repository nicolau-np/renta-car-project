<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/caroucel.css') }}">
    <title>Rent a car</title>

    <!-- ESTILOS DO NOVO HEADER ISOLADO -->
    <style>
        :root {
            --nav-bg: rgba(255, 255, 255, 0.85);
            --nav-text: #1a1a1a;
            --nav-accent: #0f2b48;
            --nav-hover: #0f2b48;
        }

        /* Container Principal Fixo */
        .modern-navbar {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            z-index: 99999 !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: var(--nav-bg) !important;
            border-bottom: 1px solid rgba(20, 18, 18, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Estado Animado ao Rolar a Página (Scroll) */
        .modern-navbar.scrolled {
            background: rgba(15, 43, 72, 0.95) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modern-navbar-wrapper {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            transition: padding 0.3s ease;
        }

        .modern-navbar.scrolled .modern-navbar-wrapper {
            padding: 0.75rem 2rem;
        }

        /* Logo */
        .modern-brand-logo {
            text-decoration: none !important;
            display: flex;
            flex-direction: column;
            line-height: 1;
        }

        .modern-brand-name {
            font-size: 1.35rem;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--nav-accent);
            transition: color 0.3s ease;
        }

        .modern-brand-sub {
            font-size: 0.7rem;
            font-weight: 700;
            color: #000000;
            letter-spacing: 2px;
            transition: color 0.3s ease;
        }

        .modern-navbar.scrolled .modern-brand-name,
        .modern-navbar.scrolled .modern-brand-sub {
            color: #ffffff !important;
        }

        /* Menu de Navegação */
        .modern-nav-menu {
            display: flex;
            gap: 1.8rem;
            list-style: none !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .modern-nav-link {
            text-decoration: none !important;
            color: var(--nav-text) !important;
            font-size: 0.95rem;
            font-weight: 500;
            position: relative;
            padding: 0.3rem 0;
            transition: color 0.3s ease;
        }


        .modern-nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: var(--nav-accent);
            transition: width 0.3s ease;
        }

        .modern-navbar.scrolled .modern-nav-link {
            color: #ffffff !important;
        }

        .modern-navbar.scrolled .modern-nav-link::after {
            background-color: #ffffff;
        }

        .modern-nav-link:hover::after {
            width: 100%;
        }

        /* Botão de Ação */
        .modern-btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--nav-accent) !important;
            color: #ffffff !important;
            padding: 0.65rem 1.4rem;
            border-radius: 50px;
            text-decoration: none !important;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(15, 43, 72, 0.2);
        }

        .modern-btn-primary:hover {
            background-color: var(--nav-hover) !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(15, 43, 72, 0.3);
        }

        .modern-navbar.scrolled .modern-btn-primary {
            background-color: #ffffff !important;
            color: var(--nav-accent) !important;
        }

        .modern-navbar.scrolled .modern-btn-primary:hover {
            background-color: #f0f0f0 !important;
        }

        /* Ajuste do Carrossel para não ficar escondido debaixo do Header */
        header {
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <header>
        <!-- ESTRUTURA DO HEADER NOVO -->
        <div class="modern-navbar" id="mainHeader">
            <div class="modern-navbar-wrapper">
                <a href="{{ url('/') }}" class="modern-brand-logo">
                    <span class="modern-brand-name">NELSAL</span>
                    <span class="modern-brand-sub">& FILHOS, LDA</span>
                </a>


                
                <ul class="modern-nav-menu">
                    <li><a href="{{ url('/') }}" class="modern-nav-link">Página Inicial</a></li>
                    <li><a href="{{ url('/tarifas-e-reservas') }}" class="modern-nav-link">Tarifas e reservas</a></li>
                    <li><a href="{{ url('/frota') }}" class="modern-nav-link">Frota</a></li>
                    <li><a href="{{ url('/servico-de-reboque') }}" class="modern-nav-link">Serviço de reboque</a></li>
                    <li><a href="{{ url('/modificar-reserva') }}" class="modern-nav-link">Modificar reserva</a></li>
                    <li><a href="{{ url('/sobre') }}" class="modern-nav-link">Sobre</a></li>
                </ul>

                <div>
                    <a class="modern-btn-primary" href="{{ url('/fazer-reserva') }}">
                        <span>Fazer Reserva</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>

        @if ($type == 'home')
        <div class="header__carousel" id="home">

            <div class="header__carousel__track">

                {{-- SLIDE 1 --}}
                <div class="header__slide is-active"
                    style="background-image: url('https://images.unsplash.com/photo-1601929862217-f1bf94503333?q=80&w=1600&auto=format&fit=crop');">
                    <div class="header__slide__overlay"></div>
                    <div class="header__content">
                        <h1 class="header__slide__title">MANEIRA FÁCIL E RÁPIDA DE ALUGAR UMA VIATURA</h1>
                        <p class="header__slide__desc">
                            Descubra uma experiência perfeita de aluguel de carros connosco. Escolha entre uma
                            variedade de veículos para atender ao seu estilo e necessidades e pegue a estrada
                            com confiança. Rápido, fácil e confiável — alugue o seu carro hoje mesmo.
                        </p>
                        <a href="{{ url('/frota') }}#reserva" class="btn">
                            <i class="ri-calendar-check-line"></i> Reservar Agora
                        </a>
                    </div>
                </div>

                {{-- SLIDE 2 --}}
                <div class="header__slide"
                    style="background-image: url('https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=1600&auto=format&fit=crop');">
                    <div class="header__slide__overlay"></div>
                    <div class="header__content">
                        <h1 class="header__slide__title">UMA FROTA PARA CADA TIPO DE VIAGEM</h1>
                        <p class="header__slide__desc">
                            De veículos económicos a SUVs e carros de luxo, temos a opção certa para o seu
                            dia-a-dia, negócios ou férias. Todos os veículos são inspeccionados e mantidos
                            ao mais alto padrão.
                        </p>
                        <a href="{{ url('/frota') }}" class="btn">
                            <i class="ri-car-line"></i> Ver Frota
                        </a>
                    </div>
                </div>

                {{-- SLIDE 3 --}}
                <div class="header__slide"
                    style="background-image: url('https://images.unsplash.com/photo-1522255272218-7ac5249be344?q=80&w=1600&auto=format&fit=crop');">
                    <div class="header__slide__overlay"></div>
                    <div class="header__content">
                        <h1 class="header__slide__title">ASSISTÊNCIA 24 HORAS, ONDE QUER QUE ESTEJA</h1>
                        <p class="header__slide__desc">
                            A sua tranquilidade é a nossa prioridade. Contamos com uma equipa disponível
                            a qualquer hora para o apoiar em caso de imprevisto durante a sua viagem.
                        </p>
                        <a href="tel:+244923000000" class="btn btn--outline">
                            <i class="ri-phone-line"></i> Ligar Agora
                        </a>
                    </div>
                </div>

            </div>

            {{-- Setas de navegação --}}
            <button type="button" class="header__carousel__arrow header__carousel__arrow--prev" aria-label="Slide anterior">
                <i class="ri-arrow-left-s-line"></i>
            </button>
            <button type="button" class="header__carousel__arrow header__carousel__arrow--next" aria-label="Slide seguinte">
                <i class="ri-arrow-right-s-line"></i>
            </button>

            {{-- Bolinhas de navegação --}}
            <div class="header__carousel__dots"></div>

        </div>
        @endif
    </header>

    @yield('content')

    <footer class="footer pt-50px">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="footer__logo">
                    <a href="#" class="logo">
                        <span>Nelsal e Filhos, lda</span>
                    </a>
                </div>
                <p>
                    Estamos aqui para lhe oferecer os melhores veículos e uma experiência de aluguel
                    incrível. Fique conectado para receber atualizações, ofertas especiais e
                    muito mais. Dirija com confiança!
                </p>
                <ul class="footer__socials">
                    <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                    <li><a href="#"><i class="ri-youtube-fill"></i></a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Nossos Serviços</h4>
                <ul class="footer__links">
                    <li><a href="/">Página Inicial</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                    <li><a href="/termos-e-condicoes">Termos e condições</a></li>
                    <li><a href="/por-que-nos-escolher">Por que nos escolher</a></li>
                    <li><a href="/auth/login">Iniciar Sessão</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Contactos</h4>
                <ul class="footer__links">
                    <li>
                        <a href="#">
                            <span><i class="ri-phone-fill"></i></span> +244 930072711
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-map-pin-fill"></i></span> Namibe, Angola.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-mail-fill"></i></span> nelsalefilhos@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Coluna 4: Mapa (Colocar AQUI dentro da footer__container) -->
    <div class="footer__col footer__map">
      <h4>Nossa Localização</h4>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60867.22814881268!2d12.112832599999999!3d-15.196111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1b44c4b694b8e6eb%3A0x6e09e1e31d4715b0!2sMo%C3%A7%C3%A2medes%2C%20Angola!5e0!3m2!1wpt-PT!2s!4v1700000000000!5m2!1wpt-PT!2s" 
        width="100%" 
        height="180" 
        style="border:0; border-radius: 8px;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>

  </div>




        <div class="footer__bar">
            Copyright © 2025 Nelsal e Filhos, lda. Todos os direitos reservados.
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/caroucel.js') }}"></script>

    <!-- ANIMAÇÃO DO HEADER AO ROLAR -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

    <script>
        const video = document.getElementById('videoComercial');
        if (video) {
            video.pause();
            video.addEventListener('mouseenter', () => { video.play(); });
            video.addEventListener('mouseleave', () => { video.pause(); });
            video.addEventListener('click', () => {
                if (video.paused) { video.play(); } else { video.pause(); }
            });
        }
    </script>
</body>
</html>


<!-- Botão Flutuante do Chatbot -->
<button id="chat-toggle-btn" class="chat-btn">💬 Ajuda</button>

<!-- Janela do Chatbot -->
<div id="chat-box" class="chat-box" style="display: none;">
  <div class="chat-header">
    <span>Assistente Nelsal</span>
    <button id="chat-close-btn">&times;</button>
  </div>
  <div id="chat-messages" class="chat-messages">
    <div class="msg bot">Olá! Como posso ajudar com a sua reserva hoje?</div>
  </div>
  <div class="chat-input-area">
    <input type="text" id="chat-input" placeholder="Escreva a sua mensagem...">
    <button id="chat-send-btn">Enviar</button>
  </div>
</div>

<!-- Lógica JavaScript do Chatbot -->
<script>
  document.getElementById('chat-toggle-btn').addEventListener('click', function() {
    const box = document.getElementById('chat-box');
    box.style.display = (box.style.display === 'none' || box.style.display === '') ? 'flex' : 'none';
  });

  document.getElementById('chat-close-btn').addEventListener('click', function() {
    document.getElementById('chat-box').style.display = 'none';
  });

  document.getElementById('chat-send-btn').addEventListener('click', enviarMensagem);

  document.getElementById('chat-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') enviarMensagem();
  });

  function enviarMensagem() {
    const input = document.getElementById('chat-input');
    const message = input.value.trim();
    if (!message) return;

    const messagesDiv = document.getElementById('chat-messages');
    messagesDiv.innerHTML += `<div class="msg user">${message}</div>`;
    input.value = '';
    messagesDiv.scrollTop = messagesDiv.scrollHeight;

    fetch('/chatbot/message', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ message: message })
    })
    .then(res => res.json())
    .then(data => {
      messagesDiv.innerHTML += `<div class="msg bot">${data.reply}</div>`;
      messagesDiv.scrollTop = messagesDiv.scrollHeight;
    })
    .catch(() => {
      messagesDiv.innerHTML += `<div class="msg bot">Desculpe, ocorreu um erro ao conectar com o assistente.</div>`;
    });
  }
</script>