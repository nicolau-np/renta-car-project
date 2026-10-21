<?php

namespace App\Http\Controllers;

use App\Helpers\MenuItemsHelper;
use App\Helpers\UploadHelper;
use App\Models\Carro;
use App\Models\CarroAlugado;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Reboque;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct(
        private MenuItemsHelper $menuItemsHelper,
        private Carro $carro,
        private Pedido $pedido,
        private UploadHelper $upload_helper,
        private CarroAlugado $carro_alugado,
        private Cliente $cliente,
        private Reboque $reboque
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

    public function servicoDeReboqueStore(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|string',
            'telefone' => 'required|string',
            'local_da_viatura' => 'required|string',
            'tipo_de_servico' => 'required|string',
            'modelo_marca_da_viatura' => 'required|string',
            'observacao' => 'nullable|string',
        ], [], [
            'nome' => 'Nome',
            'telefone' => 'Nº de Telefone',
            'local_da_viatura' => 'Local da Viatura',
            'tipo_de_servico' => 'Tipo de Serviço',
            'modelo_marca_da_viatura' => 'Modelo de Marca da Viatura',
            'observacao' => 'Observação',
        ]);


        $response = $this->reboque->create($request->all());

        return back()->with('success', 'Feito com sucesso');
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
        $this->validate($request, [
            'veiculo_id' => 'required|integer|exists:carros,id',
            'data_de_recolha' => 'required|date',
            'local_de_recolha' => 'required|string',
            'data_de_devolucao' => 'required|date|after:data_de_recolha',
            'local_de_devolucao' => 'required|string',
            'nome' => 'required|string',
            'telefone' => 'required|integer',
            'email' => 'required|email',
            'carta_de_conducao' => 'required|string',
        ], [], [
            'veiculo_id' => 'Veículo',
            'data_de_recolha' => 'Data de recolha',
            'local_de_recolha' => 'Local de recolha',
            'data_de_devolucao' => 'Data de devolução',
            'local_de_devolucao' => 'Local de devolução',
            'nome' => 'Nome',
            'telefone' => 'Nº de Telefone',
            'email' => 'E-mail',
            'carta_de_conducao' => 'Nº da Carta de Condução',
        ]);

        $carro = $this->carro->findOrFail($request->veiculo_id);
        $data_de_recolha = Carbon::parse($request->data_de_recolha);
        $data_de_devolucao = Carbon::parse($request->data_de_devolucao);

        $total_de_dias = $data_de_recolha->diffInDays($data_de_devolucao);

        $valor_total = $total_de_dias * $carro->preco_por_dia;
        $data['carro_alugado'] = [
            'carro_id' => $request->veiculo_id,
            'preco' => $carro->preco_por_dia,
            'data_de_recolha' => $request->data_de_recolha,
            'data_de_devolucao' => $request->data_de_devolucao,
            'local_de_recolha' => $request->local_de_recolha,
            'local_de_devolucao' => $request->local_de_devolucao,
            'total_de_dias' => $total_de_dias,
            'valor_total' => $valor_total,
        ];

        $data['cliente'] = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'carta_de_conducao' => $request->carta_de_conducao,
        ];

        return DB::transaction(function () use ($data) {
            $response = $this->cliente->create($data['cliente']);
            $data['carro_alugado']['cliente_id'] = $response->id;
            $response_carro_alugado = $this->carro_alugado->create($data['carro_alugado']);

            return redirect('/reports/recibo-de-reserva/' . $response_carro_alugado->id);
        });
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

    public function reciboDeReserva(string $carro_alugado_id)
    {
        $reserva = CarroAlugado::with(['cliente', 'carro'])
            ->findOrFail($carro_alugado_id);

        $cliente = $reserva->cliente;
        $carro = $reserva->carro;

        $pdf = Pdf::loadView('pdfs.reserva', [
            'reserva' => $reserva,
            'cliente' => $cliente,
            'carro' => $carro,
        ]);

        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('reserva-' . $reserva->id . '.pdf');
    }
}
