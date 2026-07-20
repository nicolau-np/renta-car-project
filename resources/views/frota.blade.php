@extends('layouts.app')

@section('content')

    {{-- HERO DA PÁGINA --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">A Nossa Frota</h2>
        <p class="section__description" style="max-width: 600px; margin-inline: auto;">
            Explore a nossa selecção de veículos cuidadosamente mantidos para garantir conforto,
            segurança e fiabilidade em cada viagem.
        </p>
    </section>

    {{-- ESTATÍSTICAS DA FROTA --}}
    <section class="section__container pt-50px pb-20px">
        <div class="row gy-3" style="max-width: 860px; margin-inline: auto; text-align: center;">
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">32+</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Veículos disponíveis</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">5</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Categorias</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card" style="padding: 1.25rem;">
                    <p style="font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0;">100%</p>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">Inspeccionados</p>
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

    {{-- LISTAGEM DE VEÍCULOS --}}
    <section class="deals pt-30px pb-50px" id="frota">
        <div class="section__container deals__container">
            <h2 class="section__header">Escolha o Seu Veículo</h2>
            <p class="section__description" style="max-width: 600px; margin-inline: auto; margin-bottom: 1.5rem;">
                Filtre por categoria e encontre o veículo ideal para a sua necessidade.
            </p>

            {{-- Barra de pesquisa --}}
            <div style="max-width: 500px; margin: 0 auto 1.5rem; display: flex; gap: 10px;">
                <div class="input-group">
                    <span class="input-group-text"><i class="ri-search-line"></i></span>
                    <input type="text" class="form-control" id="searchInput"
                        placeholder="Pesquisar por marca ou modelo..." oninput="filterCars()">
                </div>
            </div>

            {{-- Filtros de categoria --}}
            <div style="display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-bottom: 2rem;">
                <button class="btn btn--outline filter-btn active" onclick="setFilter('todos', this)">
                    <i class="ri-apps-line"></i> Todos
                </button>
                <button class="btn btn--outline filter-btn" onclick="setFilter('suv', this)">
                    <i class="ri-car-line"></i> SUV
                </button>
                <button class="btn btn--outline filter-btn" onclick="setFilter('sedan', this)">
                    <i class="ri-car-washing-line"></i> Sedan
                </button>
                <button class="btn btn--outline filter-btn" onclick="setFilter('pickup', this)">
                    <i class="ri-truck-line"></i> Pickup
                </button>
                <button class="btn btn--outline filter-btn" onclick="setFilter('luxo', this)">
                    <i class="ri-vip-crown-line"></i> Luxo
                </button>
                <button class="btn btn--outline filter-btn" onclick="setFilter('economico', this)">
                    <i class="ri-wallet-line"></i> Económico
                </button>
            </div>

            {{-- Mensagem de resultado vazio --}}
            <div id="emptyState" style="display: none; text-align: center; padding: 3rem 0; color: var(--text-light);">
                <i class="ri-car-line" style="font-size: 3rem; display: block; margin-bottom: 1rem;"></i>
                <p>Nenhum veículo encontrado para os filtros seleccionados.</p>
            </div>

            {{-- Grid de veículos --}}
            <div class="row gy-4" id="carGrid">

                {{-- Exemplo de card de veículo --}}
                {{-- Na versão com base de dados, substituir por @foreach ($carros as $carro) --}}

                {{-- CARD: Toyota Land Cruiser --}}
                <div class="col-12 col-md-6 col-lg-4 car-item" data-cat="suv" data-name="toyota land cruiser">
                    <div class="card" style="height: 100%;">
                        <div style="height: 200px; background: var(--extra-light); display: flex;
                            align-items: center; justify-content: center; overflow: hidden;">
                            {{-- Substituir pela imagem real: --}}
                            {{-- <img class="card-img-top" src="{{ url('storage/carros/land-cruiser.jpg') }}"
                                alt="Toyota Land Cruiser" style="height: 200px; object-fit: cover; width: 100%;"> --}}
                            <i class="ri-car-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #E6F1FB; color: #185FA5; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">SUV</span>
                                <span style="color: #f5a623; font-size: 0.85rem;">★★★★★</span>
                            </div>
                            <h4 class="card-title">Toyota Land Cruiser</h4>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-group-line"></i></span> 7 Lugares</div>
                                <div><span><i class="ri-steering-2-line"></i></span> Automático</div>
                                <div><span><i class="ri-road-map-line"></i></span> 80.000 km</div>
                                <div><span><i class="ri-gas-station-line"></i></span> Diesel</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; font-size: 0.82rem; color: #0F6E56;">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background: #1D9E75; display: inline-block;"></span>
                                Disponível
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                85.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                            </h3>
                            <a href="{{ '' }}#reserva" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Reservar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD: Toyota Hilux --}}
                <div class="col-12 col-md-6 col-lg-4 car-item" data-cat="pickup" data-name="toyota hilux">
                    <div class="card" style="height: 100%;">
                        <div style="height: 200px; background: var(--extra-light); display: flex;
                            align-items: center; justify-content: center; overflow: hidden;">
                            <i class="ri-truck-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #FAEEDA; color: #854F0B; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Pickup</span>
                                <span style="color: #f5a623; font-size: 0.85rem;">★★★★☆</span>
                            </div>
                            <h4 class="card-title">Toyota Hilux</h4>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-group-line"></i></span> 5 Lugares</div>
                                <div><span><i class="ri-steering-2-line"></i></span> Manual</div>
                                <div><span><i class="ri-road-map-line"></i></span> 60.000 km</div>
                                <div><span><i class="ri-gas-station-line"></i></span> Diesel</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; font-size: 0.82rem; color: #0F6E56;">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background: #1D9E75; display: inline-block;"></span>
                                Disponível
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                70.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                            </h3>
                            <a href="{{ '' }}#reserva" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Reservar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD: Mercedes-Benz E-Class --}}
                <div class="col-12 col-md-6 col-lg-4 car-item" data-cat="luxo" data-name="mercedes-benz e-class">
                    <div class="card" style="height: 100%;">
                        <div style="height: 200px; background: var(--extra-light); display: flex;
                            align-items: center; justify-content: center; overflow: hidden;">
                            <i class="ri-car-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #EEEDFE; color: #3C3489; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Luxo</span>
                                <span style="color: #f5a623; font-size: 0.85rem;">★★★★★</span>
                            </div>
                            <h4 class="card-title">Mercedes-Benz E-Class</h4>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-group-line"></i></span> 5 Lugares</div>
                                <div><span><i class="ri-steering-2-line"></i></span> Automático</div>
                                <div><span><i class="ri-road-map-line"></i></span> 30.000 km</div>
                                <div><span><i class="ri-gas-station-line"></i></span> Gasolina</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; font-size: 0.82rem; color: #0F6E56;">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background: #1D9E75; display: inline-block;"></span>
                                Disponível
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                130.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                            </h3>
                            <a href="{{ '' }}#reserva" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Reservar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD: Honda Civic --}}
                <div class="col-12 col-md-6 col-lg-4 car-item" data-cat="sedan" data-name="honda civic">
                    <div class="card" style="height: 100%;">
                        <div style="height: 200px; background: var(--extra-light); display: flex;
                            align-items: center; justify-content: center; overflow: hidden;">
                            <i class="ri-car-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #E1F5EE; color: #0F6E56; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Sedan</span>
                                <span style="color: #f5a623; font-size: 0.85rem;">★★★★☆</span>
                            </div>
                            <h4 class="card-title">Honda Civic</h4>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-group-line"></i></span> 5 Lugares</div>
                                <div><span><i class="ri-steering-2-line"></i></span> Automático</div>
                                <div><span><i class="ri-road-map-line"></i></span> 45.000 km</div>
                                <div><span><i class="ri-gas-station-line"></i></span> Gasolina</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; font-size: 0.82rem; color: #0F6E56;">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background: #1D9E75; display: inline-block;"></span>
                                Disponível
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                38.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                            </h3>
                            <a href="{{ '' }}#reserva" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Reservar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- CARD: Hyundai Tucson (indisponível) --}}
                <div class="col-12 col-md-6 col-lg-4 car-item" data-cat="suv" data-name="hyundai tucson">
                    <div class="card" style="height: 100%; opacity: 0.75;">
                        <div style="height: 200px; background: var(--extra-light); display: flex;
                            align-items: center; justify-content: center; overflow: hidden;">
                            <i class="ri-car-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #E6F1FB; color: #185FA5; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">SUV</span>
                                <span style="color: #f5a623; font-size: 0.85rem;">★★★★☆</span>
                            </div>
                            <h4 class="card-title">Hyundai Tucson</h4>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-group-line"></i></span> 5 Lugares</div>
                                <div><span><i class="ri-steering-2-line"></i></span> Automático</div>
                                <div><span><i class="ri-road-map-line"></i></span> 55.000 km</div>
                                <div><span><i class="ri-gas-station-line"></i></span> Gasolina</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; font-size: 0.82rem; color: #A32D2D;">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background: #E24B4A; display: inline-block;"></span>
                                Indisponível
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                60.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                            </h3>
                            <span style="color: var(--text-light); font-size: 0.85rem;">Indisponível</span>
                        </div>
                    </div>
                </div>

                {{-- CARD: Toyota Corolla --}}
                <div class="col-12 col-md-6 col-lg-4 car-item" data-cat="economico" data-name="toyota corolla">
                    <div class="card" style="height: 100%;">
                        <div style="height: 200px; background: var(--extra-light); display: flex;
                            align-items: center; justify-content: center; overflow: hidden;">
                            <i class="ri-car-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.3;"></i>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span class="badge" style="background: #EAF3DE; color: #3B6D11; font-size: 0.75rem; padding: 3px 10px; border-radius: 999px;">Económico</span>
                                <span style="color: #f5a623; font-size: 0.85rem;">★★★☆☆</span>
                            </div>
                            <h4 class="card-title">Toyota Corolla</h4>
                            <div class="deals__card__grid" style="margin-bottom: 1rem;">
                                <div><span><i class="ri-group-line"></i></span> 5 Lugares</div>
                                <div><span><i class="ri-steering-2-line"></i></span> Manual</div>
                                <div><span><i class="ri-road-map-line"></i></span> 90.000 km</div>
                                <div><span><i class="ri-gas-station-line"></i></span> Gasolina</div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; font-size: 0.82rem; color: #0F6E56;">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background: #1D9E75; display: inline-block;"></span>
                                Disponível
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; align-items: center; justify-content: space-between;">
                            <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin: 0;">
                                28.000 Kzs
                                <span style="font-size: 0.85rem; font-weight: 400; color: var(--text-light);">/dia</span>
                            </h3>
                            <a href="{{ '' }}#reserva" class="card-link"
                                style="display: flex; align-items: center; gap: 4px;">
                                Reservar <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>{{-- /row --}}
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="section__container pt-50px pb-50px"
        style="background-color: var(--extra-light, #f1f2ff); text-align: center;">
        <h2 class="section__header">Não encontrou o que procura?</h2>
        <p class="section__description" style="max-width: 580px; margin-inline: auto; margin-bottom: 2rem;">
            Contacte-nos directamente e a nossa equipa ajudará a encontrar o veículo mais
            adequado para a sua viagem.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ '' }}#reserva" class="btn">
                <i class="ri-calendar-check-line"></i> Fazer Reserva
            </a>
            <a href="tel:+244923000000" class="btn btn--outline">
                <i class="ri-phone-line"></i> Ligar Agora
            </a>
        </div>
    </section>

    {{-- SCRIPT: Filtro e pesquisa --}}
    <script>
        let activeFilter = 'todos';

        function setFilter(cat, btn) {
            activeFilter = cat;
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            filterCars();
        }

        function filterCars() {
            const q = document.getElementById('searchInput').value.toLowerCase().trim();
            const items = document.querySelectorAll('.car-item');
            let visible = 0;

            items.forEach(item => {
                const matchCat = activeFilter === 'todos' || item.dataset.cat === activeFilter;
                const matchQ   = !q || item.dataset.name.includes(q);
                const show = matchCat && matchQ;
                item.style.display = show ? '' : 'none';
                if (show) visible++;
            });

            const empty = document.getElementById('emptyState');
            if (empty) empty.style.display = visible === 0 ? 'block' : 'none';
        }
    </script>

@endsection
