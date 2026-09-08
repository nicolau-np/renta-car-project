<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use App\Helpers\UploadHelper;
use App\Models\Carro;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{

    public function __construct(
        private MenuItemsHelper $menuItemsHelper,
        private Carro $carro,
        private Pedido $pedido,
        private UploadHelper $upload_helper
    ) {}

    public function index()
    {
        $carros = $this->carro->all();
        $title = Config::get('app.name');
        $menu = "Home";
        $submenu = "";
        $type = "home";

        return view('index', compact('title', 'menu', 'submenu', 'type', 'carros'));
    }

    public function tarifasEReservas()
    {
        $title = Config::get('app.name');
        $menu = "Tarifas e Reservas";
        $submenu = "";
        $type = "tarifas-e-reservas";

        return view('tarifas-e-reservas', compact('title', 'menu', 'submenu', 'type'));
    }

    public function frota()
    {
        $title = Config::get('app.name');
        $menu = "Frota";
        $submenu = "";
        $type = "frota";

        return view('frota', compact('title', 'menu', 'submenu', 'type'));
    }

    public function servicoDeReboque()
    {
        $title = Config::get('app.name');
        $menu = "Serviço de Reboque";
        $submenu = "";
        $type = "servico-de-reboque";

        return view('servico-de-reboque', compact('title', 'menu', 'submenu', 'type'));
    }

    public function modificarReserva()
    {
        $title = Config::get('app.name');
        $menu = "Modificar Reserva";
        $submenu = "";
        $type = "modificar-reserva";

        return view('modificar-reserva', compact('title', 'menu', 'submenu', 'type'));
    }

    public function sobre()
    {
        $title = Config::get('app.name');
        $menu = "Sobre";
        $submenu = "";
        $type = "sobre";

        return view('sobre', compact('title', 'menu', 'submenu', 'type'));
    }

    public function termosECondicoes()
    {
        $title = Config::get('app.name');
        $menu = "Termos e Condições";
        $submenu = "";
        $type = "termos-e-condicoes";

        return view('termos-e-condicoes', compact('title', 'menu', 'submenu', 'type'));
    }

    public function porQueNosEscolher()
    {
        $title = Config::get('app.name');
        $menu = "Por que nos escolher";
        $submenu = "";
        $type = "por-que-nos-escolher";

        return view('por-que-nos-escolher', compact('title', 'menu', 'submenu', 'type'));
    }

    public function fazerReserva()
    {
        $veiculos = Carro::all();
        $title = Config::get('app.name');
        $menu = "Fazer Reserva";
        $submenu = "";
        $type = "fazer-reserva";

        return view('fazer-reserva', compact('title', 'menu', 'submenu', 'type', 'veiculos'));
    }

    public function fazerReservaStore(Request $request)
    {
        dd('hello');
    }

    public function panel()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();

        $title = Config::get('app.name');
        $menu = "Painel Administrativo";
        $submenu = "";
        $type = "home";

        return view('panel.index', compact('title', 'menu', 'submenu', 'type', 'items_do_menu'));
    }

    public function solicitarCarro()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $carros = $this->carro->all();

        $title = Config::get('app.name');
        $menu = "Solicitar Carro";
        $submenu = "";
        $type = "solicitar-carro";

        return view('solicitar-carro', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'carros'));
    }

    public function solicitarCarroStore(Request $request)
    {
        $this->validate($request, [], [], []);
        $data = $request->all();

        $path = $this->upload_helper->saveFile($data['bilhete'], 'bilhetes');
        $data['bilhete'] = $path;
        $this->pedido->create($data);

        return back()->with('success', 'Feito com sucesso');
    }
}
