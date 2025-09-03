<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UtilizadorController extends Controller
{
    public function __construct(
        private MenuItemsHelper $menuItemsHelper,
        private User $user
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $utilizadores = $this->user->where('nivel_de_acesso', '!=', 'admin')->paginate(10);

        $title = Config::get('app.name');
        $menu = "Utilizador";
        $submenu = "";
        $type = "utilizador";

        return view('panel.utilizadores.index', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'utilizadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();

        $title = Config::get('app.name');
        $menu = "Utilizador";
        $submenu = "";
        $type = "utilizador";

        return view('panel.utilizadores.create', compact('title', 'menu', 'submenu', 'type', 'items_do_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'nivel_de_acesso' => 'required|string',
            'name' => 'required|string',
        ], [], []);

        $data = $request->all();
        $data['password'] = "renta2025#1";

        $user = $this->user->create($data);
        if ($user)
            return back()->with('success', 'Feito com sucesso');

        return back()->with('error', 'Nao foi possivel salvar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $utilizador = $this->user->findOrFail($id);

        $title = Config::get('app.name');
        $menu = "Utilizador";
        $submenu = "";
        $type = "utilizador";

        return view('panel.utilizadores.show', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'utilizador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $utilizador = $this->user->findOrFail($id);

        $title = Config::get('app.name');
        $menu = "Utilizador";
        $submenu = "";
        $type = "utilizador";

        return view('panel.utilizadores.edit', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'utilizador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'nivel_de_acesso' => 'required|string',
            'name' => 'required|string',
        ], [], []);

        $user = $this->user->findOrFail($id)->update($request->all());
        if ($user)
            return back()->with('success', 'Feito com sucesso');

        return back()->with('error', 'Nao foi possivel salvar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->user->findOrFail($id);
        if ($user)
            return back()->with('success', 'Feito com sucesso');
    }
}
