<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use App\Helpers\UploadHelper;
use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PedidoController extends Controller
{
    public function __construct(
        private MenuItemsHelper $menuItemsHelper,
        private UploadHelper $uploadHelper,
        private Pedido $pedido
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $pedidos = $this->pedido->orderBy('created_at', 'desc')->paginate(12);


        $title = Config::get('app.name');
        $menu = "Pedido";
        $submenu = "";
        $type = "pedidos";

        return view('panel.pedidos.index', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}
}
