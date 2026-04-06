<?php

return [

    'MENU_ITENS' => [
        [
            'label' => 'Utilizadores',
            'url' => '/panel/utilizadores',
            'icon' => null,
            'dropdown' => null,
            'type' => 'utilizadores',
        ],
        [
            'label' => 'Carros',
            'url' => '/panel/carros',
            'icon' => null,
            'dropdown' => null,
            'type' => 'carros',
        ],
        [
            'label' => 'Clientes',
            'url' => '/panel/clientes',
            'icon' => null,
            'dropdown' => null,
            'type' => 'clientes',
        ],[
            'label' => 'Pedidos',
            'url' => '/panel/pedidos',
            'icon' => null,
            'dropdown' => null,
            'type' => 'pedidos',
        ],

    ],

    'USERS' => [
        [
            'name' => 'Ana Carolina',
            'email' => 'anacarolina@gmail.com',
            'nivel_de_acesso' => 'admin',
            'password' => 'renta2025#1',
        ],[
            'name' => 'Antonio Paulo',
            'email' => 'antoniopaulo@gmail.com',
            'nivel_de_acesso' => 'user',
            'password' => 'renta2025#1',
        ],
    ],

    'CATEGORIA_DE_UTILIZADOR' => [
        'admin' => 'admin',
        'user' => 'user',
    ],

    'CAIXA_AUTOMOVEL'=>[
        'automatica'=>'Automática',
        'manual'=>'Manual',
    ],

    'CATEGORIAS_DE_CARROS'=>[
        'totyota'=>'TOTYOTA',
        'hyundai'=>'HYUNDAI',
        'mitshubishi'=>'MITSHUBISHI',
        'mazda'=>'MAZDA',
        'mercedes'=>'MERCEDES',
        'audi'=>'AUDI',
    ],
];
