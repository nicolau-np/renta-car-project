<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{

    public function __construct(private MenuItemsHelper $menuItemsHelper) {}
    public function index()
    {
        $title = Config::get('app.name');
        $menu = "Home";
        $submenu = "";
        $type = "home";

        return view('index', compact('title', 'menu', 'submenu', 'type'));
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
