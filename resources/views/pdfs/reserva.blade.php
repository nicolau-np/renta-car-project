
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Reserva de Viatura</title>

    <style>
        @page {
            margin: 35px 40px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #333;
            line-height: 1.5;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #1e3a5f;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #1e3a5f;
            font-size: 22px;
            margin: 0;
        }

        .header p {
            margin: 5px 0;
            color: #666;
        }

        .info {
            text-align: right;
            margin-bottom: 20px;
        }

        h2 {
            background: #1e3a5f;
            color: white;
            font-size: 13px;
            padding: 8px;
            margin-top: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f0f3f7;
        }

        .total {
            background: #eaf2f8;
            color: #1e3a5f;
            font-size: 16px;
            font-weight: bold;
            text-align: right;
            padding: 15px;
            border: 1px solid #ccd9e5;
        }

        .footer {
            margin-top: 35px;
            text-align: center;
            color: #666;
            font-size: 10px;
        }

        .signatures {
            margin-top: 45px;
        }

        .signatures td {
            width: 50%;
            border: none;
            text-align: center;
            padding-top: 20px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>{{ $empresa ?? 'ALUGUER DE VIATURAS' }}</h1>
        <p>COMPROVATIVO DE RESERVA DE VIATURA</p>
    </div>

    <div class="info">
        <strong>N.º da reserva:</strong> {{ $reserva->id }}<br>
        <strong>Data de emissão:</strong>
        {{ now()->format('d/m/Y H:i') }}
    </div>

    <h2>1. Dados do cliente</h2>

    <table>
        <tr>
            <th>Nome</th>
            <td>{{ $cliente->nome ?? 'Não informado' }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $cliente->email ?? 'Não informado' }}</td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td>{{ $cliente->telefone ?? 'Não informado' }}</td>
        </tr>
    </table>

    <h2>2. Dados da viatura</h2>

    <table>
        <tr>
            <th>Marca</th>
            <td>{{ $carro->marca ?? 'Não informada' }}</td>
        </tr>
        <tr>
            <th>Modelo</th>
            <td>{{ $carro->modelo ?? 'Não informado' }}</td>
        </tr>
        <tr>
            <th>Matrícula</th>
            <td>{{ $carro->matricula ?? 'Não informada' }}</td>
        </tr>
        <tr>
            <th>Preço por dia</th>
            <td>{{ number_format($reserva->preco, 2, ',', '.') }} Kz</td>
        </tr>
    </table>

    <h2>3. Período e locais do aluguer</h2>

    <table>
        <tr>
            <th>Data de recolha</th>
            <td>{{ \Carbon\Carbon::parse($reserva->data_de_recolha)->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Data de devolução</th>
            <td>{{ \Carbon\Carbon::parse($reserva->data_de_devolucao)->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Local de recolha</th>
            <td>{{ $reserva->local_de_recolha }}</td>
        </tr>
        <tr>
            <th>Local de devolução</th>
            <td>{{ $reserva->local_de_devolucao }}</td>
        </tr>
        <tr>
            <th>Duração</th>
            <td>{{ $reserva->total_de_dias }} dia(s)</td>
        </tr>
    </table>

    <h2>4. Resumo financeiro</h2>

    <table>
        <tr>
            <th>Preço diário</th>
            <td>{{ number_format($reserva->preco, 2, ',', '.') }} Kz</td>
        </tr>
        <tr>
            <th>Número de dias</th>
            <td>{{ $reserva->total_de_dias }}</td>
        </tr>
    </table>

    <div class="total">
        VALOR TOTAL:
        {{ number_format($reserva->valor_total, 2, ',', '.') }} Kz
    </div>

    <table class="signatures">
        <tr>
            <td>
                __________________________<br>
                Assinatura do cliente
            </td>
            <td>
                __________________________<br>
                Assinatura da empresa
            </td>
        </tr>
    </table>

    <div class="footer">
        Agradecemos a sua preferência.<br>
        Documento gerado automaticamente pelo sistema de reservas.
    </div>

</body>
</html>
