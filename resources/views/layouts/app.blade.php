<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Rent a car </title>
</head>

<body>
    <header>
        <nav>
            <div class="nav__header">
                <div class="nav__logo">
                    <a href="#" class="logo">
                        <img src="{{asset('assets/img/ChatGPT Image 23_05_2025, 23_26_12.png')}}" alt="logo" class="logo-white" />
                        <img src="{{asset('assets/img/ChatGPT Image 23_05_2025, 23_26_12.png')}}" alt="logo" class="logo-dark" />
                        <span>Uyo Rent a Car</span>
                    </a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#home">Página Inicial</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="#deals">Ofertas</a></li>
                <li><a href="#choose">Por que nos escolher</a></li>
                <li><a href="#client">Depoimentos</a></li>
                <li><a href="#">Registrar</a></li>
            </ul>
            <div class="nav__btns">
                <button class="btn">Registrar</button>
            </div>
        </nav>
        <div class="header__container" id="home">
            <div class="header__image">
                <img src="{{asset('assets/img/ChatGPT Image.png')}}" alt="header" />
            </div>
            <div class="header__content">
                <h1>MANEIRA FÁCIL E RÁPIDA DE ALUGAR UMA VIATURA</h1>
                <p class="section__description">
                    Descubra uma experiência perfeita de aluguel de carros conosco. Escolhe entre uma variedade de
                    veículos para atender ao seuestilo e necessidades e pegue a estrada com confiança. Rápido, fácil e
                    confiável - alugue seu carro hoje mesmo.
                </p>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer pt-50px">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="footer__logo">
                    <a href="#" class="logo">
                        <img src="{{asset('assets/img/end logo.png')}}" alt="logo" />
                        <span>Uyo Rent a Car</span>
                    </a>
                </div>
                <p>
                    Estamos aqui para lhe oferecer os melhores veículos e uma experiência de aluguel
                    incrível. Fique conectado para receber atualizações, ofertas especiais e
                    muito mais. Dirija com confiança!
                </p>
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-youtube-fill"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Nossos Serviços</h4>
                <ul class="footer__links">
                    <li><a href="#home">Página Inicial</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#deals">Ofertas</a></li>
                    <li><a href="#choose">Por que nos escolher</a></li>
                    <li><a href="/auth/login">Iniciar Sessão</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Modelos De Veículos</h4>
                <ul class="footer__links">
                    <li><a href="#">Toyota Corolla</a></li>
                    <li><a href="#">Toyota Land Cruiser V8</a></li>
                    <li><a href="#">Jetour X70</a></li>
                    <li><a href="#">Hyunday Santa Fé</a></li>
                    <li><a href="#">Mistubishi Pajero</a></li>
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
                            <span><i class="ri-mail-fill"></i></span> uyocars10@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2025 Uyo. All rights reserved.
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        const video = document.getElementById('videoComercial');

        video.pause();

        video.addEventListener('mouseenter', () => {
            video.play();
        });

        video.addEventListener('mouseleave', () => {
            video.pause();
        });

        video.addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    </script>

</body>

</html>
