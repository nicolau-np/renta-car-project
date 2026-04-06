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
