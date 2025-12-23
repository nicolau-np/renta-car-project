<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{

    public function __construct(
        private MenuItemsHelper $menuItemsHelper,
        private Carro $carro
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
}
