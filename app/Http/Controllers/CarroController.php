<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use App\Helpers\UploadHelper;
use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CarroController extends Controller
{
    public function __construct(
        private MenuItemsHelper $menuItemsHelper,
        private Carro $carro,
        private UploadHelper $uploadHelper,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $carros = $this->carro->paginate(10);

        $title = Config::get('app.name');
        $menu = "Carro";
        $submenu = "";
        $type = "carros";

        return view('panel.carros.index', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items_do_menu = $this->menuItemsHelper->getItems();

        $title = Config::get('app.name');
        $menu = "Carro";
        $submenu = "";
        $type = "carros";

        return view('panel.carros.create', compact('title', 'menu', 'submenu', 'type', 'items_do_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'cor' => 'required|string',
            'matricula' => 'required|string',
            'caixa_automovel' => 'required|string',
            'lugares' => 'required|string',
            'kilometragem' => 'required|string',
            'img' => 'required|mimes:jpg,jpeg,png',
            'preco_por_dia' => 'required|numeric|min:1',
        ], [], []);

        $path = $this->uploadHelper->saveFile($request->img, 'carros');
        $data = $request->all();
        $data['img'] = $path;
        $carro = $this->carro->create($data);
        if ($carro)
            return back()->with('success', 'Feito com sucesso');

        return back()->with('error', 'Nao foi possivel salvar');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $carro = $this->carro->findOrFail($id);

        $title = Config::get('app.name');
        $menu = "Carro";
        $submenu = "";
        $type = "carros";

        return view('panel.carros.show', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'carro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items_do_menu = $this->menuItemsHelper->getItems();
        $carro = $this->carro->findOrFail($id);

        $title = Config::get('app.name');
        $menu = "Carro";
        $submenu = "";
        $type = "carros";

        return view('panel.carros.edit', compact('title', 'menu', 'submenu', 'type', 'items_do_menu', 'carro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carro = $this->carro->findOrFail($id);

        $this->validate($request, [
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'cor' => 'required|string',
            'matricula' => 'required|string',
            'caixa_automovel' => 'required|string',
            'lugares' => 'required|string',
            'kilometragem' => 'required|string',
            'preco_por_dia' => 'required|numeric|min:1',
        ], [], []);

        $data = $request->all();
        if ($request->img && $request->img != null) {
            $path = $this->uploadHelper->updateFile($request->img, $carro->img, 'carros');
            $data['img'] = $path;
        }
        $carro->update($data);
        if ($carro)
            return back()->with('success', 'Feito com sucesso');

        return back()->with('error', 'Nao foi possivel salvar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carro = $this->carro->findOrFail($id);
        $this->uploadHelper->deleteFileIfExists('carros', $carro->img);
        $carro->delete();
        return back()->with('success', 'Feito com sucesso');
    }
}
